@extends('layout.admin-layout')
@section('custom-css')
    <style>
        .multi-select {
            display: flex;
            box-sizing: border-box;
            flex-direction: column;
            position: relative;
            width: 100%;
            user-select: none;
        }

        .multi-select .multi-select-header {
            border: 1px solid #dee2e6;
            padding: 7px 30px 7px 12px;
            overflow: hidden;
            gap: 7px;
            min-height: 45px;
        }

        .multi-select .multi-select-header::after {
            content: "";
            display: block;
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23949ba3' viewBox='0 0 16 16'%3E%3Cpath d='M8 13.1l-8-8 2.1-2.2 5.9 5.9 5.9-5.9 2.1 2.2z'/%3E%3C/svg%3E");
            height: 12px;
            width: 12px;
        }

        .multi-select .multi-select-header.multi-select-header-active {
            border-color: #c1c9d0;
        }

        .multi-select .multi-select-header.multi-select-header-active::after {
            transform: translateY(-50%) rotate(180deg);
        }

        .multi-select .multi-select-header.multi-select-header-active+.multi-select-options {
            display: flex;
        }

        .multi-select .multi-select-header .multi-select-header-placeholder {
            color: #65727e;
        }

        .multi-select .multi-select-header .multi-select-header-option {
            display: inline-flex;
            align-items: center;
            background-color: #f3f4f7;
            font-size: 14px;
            padding: 3px 8px;
            border-radius: 5px;
        }

        .multi-select .multi-select-header .multi-select-header-max {
            font-size: 14px;
            color: #65727e;
        }

        .multi-select .multi-select-options {
            display: none;
            box-sizing: border-box;
            flex-flow: wrap;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            z-index: 999;
            margin-top: 5px;
            padding: 5px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-height: 200px;
            overflow-y: auto;
            overflow-x: hidden;
        }

        .multi-select .multi-select-options::-webkit-scrollbar {
            width: 5px;
        }

        .multi-select .multi-select-options::-webkit-scrollbar-track {
            background: #f0f1f3;
        }

        .multi-select .multi-select-options::-webkit-scrollbar-thumb {
            background: #cdcfd1;
        }

        .multi-select .multi-select-options::-webkit-scrollbar-thumb:hover {
            background: #b2b6b9;
        }

        .multi-select .multi-select-options .multi-select-option,
        .multi-select .multi-select-options .multi-select-all {
            padding: 4px 12px;
            height: 42px;
        }

        .multi-select .multi-select-options .multi-select-option .multi-select-option-radio,
        .multi-select .multi-select-options .multi-select-all .multi-select-option-radio {
            margin-right: 14px;
            height: 16px;
            width: 16px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        .multi-select .multi-select-options .multi-select-option .multi-select-option-text,
        .multi-select .multi-select-options .multi-select-all .multi-select-option-text {
            box-sizing: border-box;
            flex: 1;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            color: inherit;
            font-size: 16px;
            line-height: 20px;
        }

        .multi-select .multi-select-options .multi-select-option.multi-select-selected .multi-select-option-radio,
        .multi-select .multi-select-options .multi-select-all.multi-select-selected .multi-select-option-radio {
            border-color: #40c979;
            background-color: #40c979;
        }

        .multi-select .multi-select-options .multi-select-option.multi-select-selected .multi-select-option-radio::after,
        .multi-select .multi-select-options .multi-select-all.multi-select-selected .multi-select-option-radio::after {
            content: "";
            display: block;
            width: 3px;
            height: 7px;
            margin: 0.12em 0 0 0.27em;
            border: solid #fff;
            border-width: 0 0.15em 0.15em 0;
            transform: rotate(45deg);
        }

        .multi-select .multi-select-options .multi-select-option.multi-select-selected .multi-select-option-text,
        .multi-select .multi-select-options .multi-select-all.multi-select-selected .multi-select-option-text {
            color: #40c979;
        }

        .multi-select .multi-select-options .multi-select-option:hover,
        .multi-select .multi-select-options .multi-select-option:active,
        .multi-select .multi-select-options .multi-select-all:hover,
        .multi-select .multi-select-options .multi-select-all:active {
            background-color: #f3f4f7;
        }

        .multi-select .multi-select-options .multi-select-all {
            border-bottom: 1px solid #f1f3f5;
            border-radius: 0;
        }

        .multi-select .multi-select-options .multi-select-search {
            padding: 7px 10px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            margin: 10px 10px 5px 10px;
            width: 100%;
            outline: none;
            font-size: 16px;
        }

        .multi-select .multi-select-options .multi-select-search::placeholder {
            color: #b2b5b9;
        }

        .multi-select .multi-select-header,
        .multi-select .multi-select-option,
        .multi-select .multi-select-all {
            display: flex;
            flex-wrap: wrap;
            box-sizing: border-box;
            align-items: center;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
            align-items: center;
            width: 100%;
            font-size: 16px;
            color: #212529;
        }
    </style>
@endsection
@section('work-space')

    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Edit Category</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>

                    </ul>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <div class="bank-inner-details">
                    <div class="row">
                        <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Title<span class="text-danger">*</span></label>
                                        <input name="title" type="text" class="form-control"
                                            value="{{ $post->title }}">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="category" class="select form-control">
                                            <option>Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $category->id == $post->category_id ? 'selected' : '' }}>
                                                    {{ $category->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>



                                @php
                                    $tagIds = json_decode($post->tags);
                                @endphp
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Tags</label>
                                        <select name="tag" class="select form-control" data-placeholder="Select Tags"
                                            multiple data-multi-select>
                                            <option>Select Tag</option>
                                            @foreach ($tags as $tag)
                                                <option value="{{ $tag->id }}"
                                                    {{ is_array($tagIds) && in_array($tag->id, $tagIds) ? 'selected' : '' }}>
                                                    {{ $tag->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Images <span class="form-text text-muted">(Optional)</span></label>
                                        <input type="file" name="images[]" id="images" multiple class="form-control"
                                            accept="image/*" max="5">
                                        <small class="form-text text-muted">You can upload up to 5 images.</small>
                                    </div>
                                </div>

                                @php
                                    $images = json_decode($post->image);
                                @endphp

                                <!-- Thumbnail card for the uploaded image -->
                                <div class="col-lg-4 col-md-4" id="thumbnail-card" style="display: none;">
                                    <div class="card flex-fill bg-white">
                                        <img alt="Thumbnail" id="thumbnail" class="card-img-top">
                                        <small class="form-text text-muted">This will be your thumbnail.</small>
                                    </div>
                                </div>

                                <!-- Carousel for images from the database -->
                                <div class="col-lg-6 col-md-6" id="carousel-container">
                                    <div class="card">
                                        <div class="card-body">
                                            <div id="carouselExampleIndicators" class="carousel slide"
                                                data-bs-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    @if ($images && count($images) > 0)
                                                        @foreach ($images as $index => $image)
                                                            <li data-bs-target="#carouselExampleIndicators"
                                                                data-bs-slide-to="{{ $index }}"
                                                                class="{{ $index === 0 ? 'active' : '' }}"></li>
                                                        @endforeach
                                                    @endif
                                                </ol>
                                                <div class="carousel-inner" role="listbox">
                                                    @if ($images && count($images) > 0)
                                                        @foreach ($images as $index => $image)
                                                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                                                <img class="d-block img-fluid"
                                                                    src="{{ asset('images/post/' . $image) }}"
                                                                    alt="Slide {{ $index + 1 }}">
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <div class="carousel-item active">
                                                            <img class="d-block img-fluid" src="assets/img/default.jpg"
                                                                alt="No Image Available">
                                                        </div>
                                                    @endif
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleIndicators"
                                                    role="button" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleIndicators"
                                                    role="button" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </a>
                                            </div>
                                            <small class="form-text text-muted">Images.</small>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    document.getElementById('images').addEventListener('change', function(event) {
                                        const files = event.target.files;
                                        const thumbnailCard = document.getElementById('thumbnail-card');
                                        const thumbnail = document.getElementById('thumbnail');
                                        const carouselContainer = document.getElementById('carousel-container');
                                        const carousel = document.getElementById('carouselExampleIndicators');

                                        // Clear the thumbnail card initially
                                        thumbnailCard.style.display = 'none';
                                        carouselContainer.style.display = 'block'; // Show carousel initially

                                        if (files.length > 5) {
                                            alert('You can only upload a maximum of 5 images.');
                                            this.value = ''; // Clear the input if more than 5 files are selected
                                            carouselContainer.style.display = 'block'; // Keep carousel visible if input is cleared
                                        } else if (files.length > 0) {
                                            // Hide the carousel when files are selected
                                            carouselContainer.style.display = 'none';
                                            // Display the first image as a thumbnail
                                            const firstImage = files[0];
                                            thumbnail.src = URL.createObjectURL(firstImage);
                                            thumbnailCard.style.display = 'block'; // Show the thumbnail card
                                        } else {
                                            // Hide the thumbnail card if no images are selected
                                            thumbnailCard.style.display = 'none';
                                            carouselContainer.style.display = 'block'; // Show carousel if no new images
                                        }
                                    });
                                </script>



                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="editor" class="form-control" id="body" placeholder="Enter the Description" name="body">{{ $post->content }}</textarea>
                                </div>
                            </div>
                            <div class=" blog-categories-btn pt-0">
                                <div class="bank-details-btn ">
                                    <button type="submit" class="btn bank-cancel-btn me-2">Update Post</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>



    </div>
    <script>
        document.getElementById('images').addEventListener('change', function(event) {
            const files = event.target.files;
            const thumbnailCard = document.getElementById('thumbnail-card');
            const thumbnail = document.getElementById('thumbnail');
            const carouselIndicators = document.getElementById('carousel-indicators');
            const carouselInner = document.getElementById('carousel-inner');
            const carousel = document.getElementById('dynamicCarousel');

            // Clear previous carousel items and indicators
            carouselIndicators.innerHTML = '';
            carouselInner.innerHTML = '';

            if (files.length > 5) {
                alert('You can only upload a maximum of 5 images.');
                this.value = ''; // Clear the input if more than 5 files are selected
                thumbnailCard.style.display = 'none'; // Hide the card
                carousel.style.display = 'none'; // Hide the carousel
            } else if (files.length > 0) {
                // Display the first image as a thumbnail
                const firstImage = files[0];
                thumbnail.src = URL.createObjectURL(firstImage);
                thumbnailCard.style.display = 'block'; // Show the thumbnail card
                carousel.style.display = 'block'; // Show the carousel

                // Create carousel items for each selected image
                Array.from(files).forEach((file, index) => {
                    // Create carousel indicator
                    const indicator = document.createElement('li');
                    indicator.setAttribute('data-bs-target', '#dynamicCarousel');
                    indicator.setAttribute('data-bs-slide-to', index);
                    indicator.className = index === 0 ? 'active' : '';
                    carouselIndicators.appendChild(indicator);

                    // Create carousel item
                    const carouselItem = document.createElement('div');
                    carouselItem.className = `carousel-item ${index === 0 ? 'active' : ''}`;
                    const img = document.createElement('img');
                    img.className = 'd-block img-fluid';
                    img.src = URL.createObjectURL(file);
                    img.alt = `Slide ${index + 1}`;
                    carouselItem.appendChild(img);
                    carouselInner.appendChild(carouselItem);
                });
                console.log("Carousel items created:", carouselInner.children.length); // Debugging line
            } else {
                // Hide the thumbnail card and carousel if no images are selected
                thumbnailCard.style.display = 'none';
                carousel.style.display = 'none';
            }
        });
    </script>
@endsection


@section('custom-js')
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    <script>
        // Initialize CKEditor
        ClassicEditor
            .create(document.querySelector('textarea'))
            .then(editor => {
                console.log('Editor was initialized', editor);
            })
            .catch(error => {
                console.error('Error during initialization of the editor', error);
            });
    </script>

    <script>
        class MultiSelect {

            constructor(element, options = {}) {
                let defaults = {
                    placeholder: 'Select item(s)',
                    max: null,
                    search: true,
                    selectAll: true,
                    listAll: true,
                    name: '',
                    width: '',
                    height: '',
                    dropdownWidth: '',
                    dropdownHeight: '',
                    data: [],
                    onChange: function() {},
                    onSelect: function() {},
                    onUnselect: function() {}
                };
                this.options = Object.assign(defaults, options);
                this.selectElement = typeof element === 'string' ? document.querySelector(element) : element;
                for (const prop in this.selectElement.dataset) {
                    if (this.options[prop] !== undefined) {
                        this.options[prop] = this.selectElement.dataset[prop];
                    }
                }
                this.name = this.selectElement.getAttribute('name') ? this.selectElement.getAttribute('name') :
                    'multi-select-' + Math.floor(Math.random() * 1000000);
                if (!this.options.data.length) {
                    let options = this.selectElement.querySelectorAll('option');
                    for (let i = 0; i < options.length; i++) {
                        this.options.data.push({
                            value: options[i].value,
                            text: options[i].innerHTML,
                            selected: options[i].selected,
                            html: options[i].getAttribute('data-html')
                        });
                    }
                }
                this.element = this._template();
                this.selectElement.replaceWith(this.element);
                this._updateSelected();
                this._eventHandlers();
            }

            _template() {
                let optionsHTML = '';
                for (let i = 0; i < this.data.length; i++) {
                    optionsHTML += `
                    <div class="multi-select-option${this.selectedValues.includes(this.data[i].value) ? ' multi-select-selected' : ''}" data-value="${this.data[i].value}">
                        <span class="multi-select-option-radio"></span>
                        <span class="multi-select-option-text">${this.data[i].html ? this.data[i].html : this.data[i].text}</span>
                    </div>
                `;
                }
                let selectAllHTML = '';
                if (this.options.selectAll === true || this.options.selectAll === 'true') {
                    selectAllHTML = `<div class="multi-select-all">
                    <span class="multi-select-option-radio"></span>
                    <span class="multi-select-option-text">Select all</span>
                </div>`;
                }
                let template = `
                <div class="multi-select ${this.name}"${this.selectElement.id ? ' id="' + this.selectElement.id + '"' : ''} style="${this.width ? 'width:' + this.width + ';' : ''}${this.height ? 'height:' + this.height + ';' : ''}">
                    ${this.selectedValues.map(value => `<input type="hidden" name="${this.name}[]" value="${value}">`).join('')}
                    <div class="multi-select-header" style="${this.width ? 'width:' + this.width + ';' : ''}${this.height ? 'height:' + this.height + ';' : ''}">
                        <span class="multi-select-header-max">${this.options.max ? this.selectedValues.length + '/' + this.options.max : ''}</span>
                        <span class="multi-select-header-placeholder">${this.placeholder}</span>
                    </div>
                    <div class="multi-select-options" style="${this.options.dropdownWidth ? 'width:' + this.options.dropdownWidth + ';' : ''}${this.options.dropdownHeight ? 'height:' + this.options.dropdownHeight + ';' : ''}">
                        ${this.options.search === true || this.options.search === 'true' ? '<input type="text" class="multi-select-search" placeholder="Search...">' : ''}
                        ${selectAllHTML}
                        ${optionsHTML}
                    </div>
                </div>
                `;
                let element = document.createElement('div');
                element.innerHTML = template;
                return element;
            }

            _eventHandlers() {
                let headerElement = this.element.querySelector('.multi-select-header');
                this.element.querySelectorAll('.multi-select-option').forEach(option => {
                    option.onclick = () => {
                        let selected = true;
                        if (!option.classList.contains('multi-select-selected')) {
                            if (this.options.max && this.selectedValues.length >= this.options.max) {
                                return;
                            }
                            option.classList.add('multi-select-selected');
                            if (this.options.listAll === true || this.options.listAll === 'true') {
                                headerElement.insertAdjacentHTML('afterbegin',
                                    `<span class="multi-select-header-option" data-value="${option.dataset.value}">${option.querySelector('.multi-select-option-text').innerHTML}</span>`
                                );
                            }
                            this.element.querySelector('.multi-select').insertAdjacentHTML('afterbegin',
                                `<input type="hidden" name="${this.name}[]" value="${option.dataset.value}">`
                            );
                            this.data.filter(data => data.value == option.dataset.value)[0].selected = true;
                        } else {
                            option.classList.remove('multi-select-selected');
                            this.element.querySelectorAll('.multi-select-header-option').forEach(
                                headerOption => headerOption.dataset.value == option.dataset.value ?
                                headerOption.remove() : '');
                            this.element.querySelector(`input[value="${option.dataset.value}"]`).remove();
                            this.data.filter(data => data.value == option.dataset.value)[0].selected =
                                false;
                            selected = false;
                        }
                        if (this.options.listAll === false || this.options.listAll === 'false') {
                            if (this.element.querySelector('.multi-select-header-option')) {
                                this.element.querySelector('.multi-select-header-option').remove();
                            }
                            headerElement.insertAdjacentHTML('afterbegin',
                                `<span class="multi-select-header-option">${this.selectedValues.length} selected</span>`
                            );
                        }
                        if (!this.element.querySelector('.multi-select-header-option')) {
                            headerElement.insertAdjacentHTML('afterbegin',
                                `<span class="multi-select-header-placeholder">${this.placeholder}</span>`
                            );
                        } else if (this.element.querySelector('.multi-select-header-placeholder')) {
                            this.element.querySelector('.multi-select-header-placeholder').remove();
                        }
                        if (this.options.max) {
                            this.element.querySelector('.multi-select-header-max').innerHTML = this
                                .selectedValues.length + '/' + this.options.max;
                        }
                        if (this.options.search === true || this.options.search === 'true') {
                            this.element.querySelector('.multi-select-search').value = '';
                        }
                        this.element.querySelectorAll('.multi-select-option').forEach(option => option.style
                            .display = 'flex');
                        headerElement.classList.remove('multi-select-header-active');
                        this.options.onChange(option.dataset.value, option.querySelector(
                            '.multi-select-option-text').innerHTML, option);
                        if (selected) {
                            this.options.onSelect(option.dataset.value, option.querySelector(
                                '.multi-select-option-text').innerHTML, option);
                        } else {
                            this.options.onUnselect(option.dataset.value, option.querySelector(
                                '.multi-select-option-text').innerHTML, option);
                        }
                    };
                });
                headerElement.onclick = () => headerElement.classList.toggle('multi-select-header-active');
                if (this.options.search === true || this.options.search === 'true') {
                    let search = this.element.querySelector('.multi-select-search');
                    search.oninput = () => {
                        this.element.querySelectorAll('.multi-select-option').forEach(option => {
                            option.style.display = option.querySelector('.multi-select-option-text')
                                .innerHTML.toLowerCase().indexOf(search.value.toLowerCase()) > -1 ? 'flex' :
                                'none';
                        });
                    };
                }
                if (this.options.selectAll === true || this.options.selectAll === 'true') {
                    let selectAllButton = this.element.querySelector('.multi-select-all');
                    selectAllButton.onclick = () => {
                        let allSelected = selectAllButton.classList.contains('multi-select-selected');
                        this.element.querySelectorAll('.multi-select-option').forEach(option => {
                            let dataItem = this.data.find(data => data.value == option.dataset.value);
                            if (dataItem && ((allSelected && dataItem.selected) || (!allSelected && !
                                    dataItem.selected))) {
                                option.click();
                            }
                        });
                        selectAllButton.classList.toggle('multi-select-selected');
                    };
                }
                if (this.selectElement.id && document.querySelector('label[for="' + this.selectElement.id + '"]')) {
                    document.querySelector('label[for="' + this.selectElement.id + '"]').onclick = () => {
                        headerElement.classList.toggle('multi-select-header-active');
                    };
                }
                document.addEventListener('click', event => {
                    if (!event.target.closest('.' + this.name) && !event.target.closest('label[for="' + this
                            .selectElement.id + '"]')) {
                        headerElement.classList.remove('multi-select-header-active');
                    }
                });
            }

            _updateSelected() {
                if (this.options.listAll === true || this.options.listAll === 'true') {
                    this.element.querySelectorAll('.multi-select-option').forEach(option => {
                        if (option.classList.contains('multi-select-selected')) {
                            this.element.querySelector('.multi-select-header').insertAdjacentHTML('afterbegin',
                                `<span class="multi-select-header-option" data-value="${option.dataset.value}">${option.querySelector('.multi-select-option-text').innerHTML}</span>`
                            );
                        }
                    });
                } else {
                    if (this.selectedValues.length > 0) {
                        this.element.querySelector('.multi-select-header').insertAdjacentHTML('afterbegin',
                            `<span class="multi-select-header-option">${this.selectedValues.length} selected</span>`
                        );
                    }
                }
                if (this.element.querySelector('.multi-select-header-option')) {
                    this.element.querySelector('.multi-select-header-placeholder').remove();
                }
            }

            get selectedValues() {
                return this.data.filter(data => data.selected).map(data => data.value);
            }

            get selectedItems() {
                return this.data.filter(data => data.selected);
            }

            set data(value) {
                this.options.data = value;
            }

            get data() {
                return this.options.data;
            }

            set selectElement(value) {
                this.options.selectElement = value;
            }

            get selectElement() {
                return this.options.selectElement;
            }

            set element(value) {
                this.options.element = value;
            }

            get element() {
                return this.options.element;
            }

            set placeholder(value) {
                this.options.placeholder = value;
            }

            get placeholder() {
                return this.options.placeholder;
            }

            set name(value) {
                this.options.name = value;
            }

            get name() {
                return this.options.name;
            }

            set width(value) {
                this.options.width = value;
            }

            get width() {
                return this.options.width;
            }

            set height(value) {
                this.options.height = value;
            }

            get height() {
                return this.options.height;
            }

        }
        document.querySelectorAll('[data-multi-select]').forEach(select => new MultiSelect(select));
    </script>
@endsection
