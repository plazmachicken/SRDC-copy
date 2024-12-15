@extends('layout.admin-layout')

@section('custom-css')
    <style>
        /* Additional CSS for print */
        @media print {
            .hide-on-print {
                display: none;
            }

            .card {
                page-break-inside: avoid;
            }
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
@endsection

@section('work-space')
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Form Analytics</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="row">

                    <!-- First Donut Chart -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="card-title">IP Submissions</h5>
                                <select id="month-select-1">
                                    @foreach (['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'] as $month)
                                        <option value="{{ $month }}">{{ $month }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="card-body">
                                <div id="donut-chart-1"></div>
                                <div id="no-data-message-1" style="display: none; text-align: center; color: red;">No data
                                    available for the selected month</div>
                            </div>
                        </div>
                    </div>

                    <!-- Second Donut Chart -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="card-title">IdeaKamek Posts</h5>
                                <select id="month-select-2">
                                    @foreach (['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'] as $month)
                                        <option value="{{ $month }}">{{ $month }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="card-body">
                                <div id="donut-chart-2"></div>
                                <div id="no-data-message-2" style="display: none; text-align: center; color: red;">No data
                                    available for the selected month</div>
                            </div>
                        </div>
                    </div>

                    <!-- Third Donut Chart -->
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Form Distributions</h5>
                            </div>
                            <div class="card-body">
                                <div id="donut-chart-3"></div>
                                <div id="no-data-message-3" style="display: none; text-align: center; color: red;">No data
                                    available</div>
                            </div>
                        </div>
                    </div>

                    <!-- Line Chart for Post Counts -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Post and IP Counts per Month</h5>
                            </div>
                            <div class="card-body">
                                <div id="line-chart-posts"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div><!-- Print Button -->
        <button class="btn btn-primary hide-on-print" onclick="window.print()">Save/Print</button>
        <button class="btn btn-primary hide-on-print" onclick="downloadAnalyticsExcel()">Download Excel</button>

    </div>
@endsection

@section('custom-js')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const currentMonth = new Date().toLocaleString('default', {
                month: 'long'
            });

            // Initialize charts
            const donutChart1 = new ApexCharts(document.querySelector("#donut-chart-1"), getDonutChartOptions([
                'Approved', 'Pending', 'Denied'
            ]));
            const donutChart2 = new ApexCharts(document.querySelector("#donut-chart-2"), getDonutChartOptions([
                'Active', 'Inactive'
            ]));

            const donutChart3 = new ApexCharts(document.querySelector("#donut-chart-3"), getDonutChartOptions([
                'Patent', 'Utility', 'Trademark', 'Industrial Design', 'Graphical Indication',
                'Copyright'
            ]));




            const lineChartPosts = new ApexCharts(document.querySelector("#line-chart-posts"),
                getLineChartOptions());

            // Render charts immediately on page load
            donutChart1.render();
            donutChart2.render();
            donutChart3.render();
            lineChartPosts.render();
            updateLineChartPosts();


            // Set the month dropdowns to the current month on page load
            document.getElementById('month-select-1').value = currentMonth;
            document.getElementById('month-select-2').value = currentMonth;

            // Load data and update charts for the current month on page load
            updateDonutChart1(currentMonth, donutChart1, 'no-data-message-1');
            updateDonutChart2(currentMonth, donutChart2, 'no-data-message-2');
            updateDonutChart3(donutChart3, 'no-data-message-3');
            updateLineChartPosts();

            // Event listeners for month selection changes
            document.getElementById('month-select-1').addEventListener('change', function() {
                updateDonutChart1(this.value, donutChart1, 'no-data-message-1');
            });
            document.getElementById('month-select-2').addEventListener('change', function() {
                updateDonutChart2(this.value, donutChart2, 'no-data-message-2');
            });

            // Helper function to get donut chart options
            function getDonutChartOptions(labels) {
                return {
                    chart: {
                        type: 'donut',
                        height: 350
                    },
                    labels: labels,
                    series: [],
                    noData: {
                        text: "Loading..."
                    }
                };
            }

            // Helper function to get line chart options for post counts
            function getLineChartOptions() {
                return {
                    chart: {
                        type: 'line',
                        height: 350
                    },
                    series: [], // Data will be dynamically populated
                    xaxis: {
                        categories: [
                            'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August',
                            'September', 'October', 'November', 'December'
                        ]
                    },
                    noData: {
                        text: "Loading..."
                    },
                    yaxis: {
                        title: {
                            text: 'Counts'
                        }
                    },
                    // title: {
                    //     text: 'Monthly Post and Model Counts',
                    //     align: 'center'
                    // }
                };
            }


            // Function to update the first donut chart (IP Submissions)
            async function updateDonutChart1(month, chart, noDataMessageId) {
                const noDataMessage = document.getElementById(noDataMessageId);

                try {
                    const response = await fetch(`{{ route('analytics.data') }}`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            month
                        })
                    });
                    const data = await response.json();

                    const approved = parseInt(data.approvedCount);
                    const pending = parseInt(data.pendingCount);
                    const denied = parseInt(data.deniedCount);

                    if (approved + pending + denied > 0) {
                        noDataMessage.style.display = 'none';
                        chart.updateSeries([approved, pending, denied]);
                    } else {
                        noDataMessage.style.display = 'block';
                        chart.updateSeries([]);
                    }
                } catch (error) {
                    console.error('Error fetching data:', error);
                }
            }

            // Function to update the second donut chart (Posts)
            async function updateDonutChart2(month, chart, noDataMessageId) {
                const noDataMessage = document.getElementById(noDataMessageId);

                try {
                    const response = await fetch(`{{ route('analytics.data.post') }}`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            month
                        })
                    });
                    const data = await response.json();

                    const active = parseInt(data.active);
                    const inactive = parseInt(data.inactive);

                    if (active + inactive > 0) {
                        noDataMessage.style.display = 'none';
                        chart.updateSeries([active, inactive]);
                    } else {
                        noDataMessage.style.display = 'block';
                        chart.updateSeries([]);
                    }
                } catch (error) {
                    console.error('Error fetching data:', error);
                }
            }

            // Function to update Donut Chart 3
            async function updateDonutChart3(chart, noDataMessageId) {
                const noDataMessage = document.getElementById(noDataMessageId);

                try {
                    const response = await fetch(`{{ route('analytics.data.mostpopular') }}`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    });

                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }

                    const data = await response.json();

                    // Process the data and update the chart
                    const labels = Object.keys(data);
                    const values = Object.values(data).map(value => parseInt(value));

                    if (values.reduce((a, b) => a + b, 0) > 0) {
                        noDataMessage.style.display = 'none';
                        chart.updateOptions({
                            labels: labels
                        });
                        chart.updateSeries(values);
                    } else {
                        noDataMessage.style.display = 'block';
                        chart.updateSeries([]);
                    }

                } catch (error) {
                    console.error('Error fetching data for Donut Chart 3:', error);
                }
            }


            // Function to update the line chart for post counts
            // Function to update the line chart for post and model counts
            async function updateLineChartPosts() {
                try {
                    const response = await fetch(`{{ route('analytics.data.line') }}`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    });

                    const data = await response.json();


                    if (data && data.postCounts && data.modelCounts) {
                        const postCountsData = data.postCounts.map(count => parseInt(count));
                        const modelCountsData = data.modelCounts.map(count => parseInt(count));

                        // Update the line chart with two series
                        lineChartPosts.updateSeries([{
                                name: "Post Counts",
                                data: postCountsData
                            },
                            {
                                name: "IP Counts",
                                data: modelCountsData
                            }
                        ]);
                    } else {
                        console.error("No data found for postCounts or modelCounts in response.");
                    }
                } catch (error) {
                    console.error('Error fetching data for post counts and model counts:', error);
                }
            }


        });
    </script>
@endsection
