@extends('adminlte::page')

@section('title', 'إنشاء مدونة')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="text-bold text-dark">إنشاء مقال جديد</h1>
        <a href="{{ route('admin.blog.index') }}" class="btn btn-outline-secondary btn-sm">
            <i class="fas fa-arrow-right"></i> العودة للمقالات
        </a>
    </div>
@stop

@section('content')

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
            <i class="icon fas fa-check-circle"></i> {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary shadow-sm">
                <div class="card-header bg-white">
                    <h3 class="card-title text-muted">أضف تفاصيل المقال أدناه</h3>
                </div>

                <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            {{-- عنوان المقال --}}
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title" class="font-weight-bold"><i
                                            class="fas fa-heading mr-1 text-primary"></i> عنوان المقال</label>
                                    <input type="text" name="title" id="title"
                                        class="form-control form-control-lg border-primary-soft"
                                        placeholder="اكتب عنواناً جذاباً للمقال..." required>
                                </div>
                            </div>

                            {{-- محتوى المقال --}}
                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label class="font-weight-bold"><i class="fas fa-paragraph mr-1 text-primary"></i> محتوى
                                        المقال</label>
                                    <div class="border rounded overflow-hidden">
                                        <textarea id="summernote" name="content" required></textarea>
                                    </div>
                                </div>
                            </div>

                            {{-- رفع الصورة --}}
                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label for="image" class="font-weight-bold"><i
                                            class="fas fa-image mr-1 text-primary"></i> الصورة البارزة للمقال</label>
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="image"
                                            required>
                                        <label class="custom-file-label text-right" for="image">اختر صورة
                                            المقال...</label>
                                    </div>
                                    <small class="text-muted mt-2 d-block">يفضل استخدام أبعاد متناسقة (مثل 1200x630)</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-white text-right">
                        <button class="btn btn-primary btn-lg px-5 shadow-sm" type="submit">
                            <i class="fas fa-paper-plane mr-1"></i> نشر المقال
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote.min.css" rel="stylesheet">
    <style>
        .card-outline.card-primary {
            border-top: 3px solid #007bff;
        }

        .custom-file-label::after {
            content: "تصفح";
            left: 0;
            right: auto;
            border-left: none;
            border-right: 1px solid #ced4da;
        }

        .note-editor {
            border: none !important;
        }

        .form-control-lg {
            border-radius: 8px;
            font-size: 1.1rem;
        }

        .border-primary-soft {
            border: 1px solid #dee2e6;
            transition: border-color 0.3s;
        }

        .border-primary-soft:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, .25);
        }
    </style>
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            // تفعيل Summernote بتنسيق مخصص
            $('#summernote').summernote({
                height: 350,
                lang: 'ar-AR',
                placeholder: 'ابدأ بكتابة محتوى المقال هنا...',
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });

            // تحديث اسم الملف عند الاختيار
            $('.custom-file-input').on('change', function() {
                let fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').addClass("selected").html(fileName);
            });

            // التحقق قبل الإرسال
            $('form').on('submit', function(e) {
                if ($('#summernote').summernote('isEmpty')) {
                    alert('المحتوى لا يمكن أن يكون فارغاً');
                    e.preventDefault();
                }
            });
        });
    </script>
@stop
