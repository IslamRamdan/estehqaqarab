@extends('adminlte::page')

@section('title', 'تعديل المقال')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="text-bold text-dark">تعديل المقال: <span class="text-primary">{{ $blog->title }}</span></h1>
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
            <form action="{{ route('admin.blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card card-outline card-primary shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            {{-- العمود الأيمن: البيانات الأساسية --}}
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="title" class="font-weight-bold"><i class="fas fa-heading mr-1"></i> عنوان
                                        المقال</label>
                                    <input type="text" name="title" id="title"
                                        class="form-control form-control-lg border-primary" value="{{ $blog->title }}"
                                        placeholder="أدخل العنوان هنا..." required>
                                </div>

                                <div class="form-group mt-4">
                                    <label class="font-weight-bold"><i class="fas fa-edit mr-1"></i> محتوى المقال</label>
                                    <div class="border rounded">
                                        <textarea id="summernote" name="content">{{ $blog->content }}</textarea>
                                    </div>
                                </div>
                            </div>

                            {{-- العمود الأيسر: إدارة الصورة --}}
                            <div class="col-md-4 border-left">
                                <div class="form-group text-center">
                                    <label class="font-weight-bold d-block text-right mb-3"><i
                                            class="fas fa-image mr-1"></i> الصورة الحالية</label>
                                    <div class="image-preview-wrapper mb-3">
                                        @if ($blog->image)
                                            <img src="{{ asset('storage/' . $blog->image) }}"
                                                class="img-fluid rounded shadow-sm border"
                                                style="max-height: 200px; width: 100%; object-fit: cover;">
                                        @else
                                            <div class="bg-light d-flex flex-column align-items-center justify-content-center rounded border"
                                                style="height: 200px;">
                                                <i class="fas fa-image fa-3x text-muted mb-2"></i>
                                                <span class="text-muted">لا توجد صورة حالياً</span>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group mt-4">
                                    <label for="image" class="font-weight-bold"><i class="fas fa-upload mr-1"></i> رفع
                                        صورة جديدة</label>
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="image">
                                        <label class="custom-file-label" for="image">اختر ملف...</label>
                                    </div>
                                    <small class="text-muted mt-2 d-block text-right">يفضل استخدام صور عالية الجودة (JPG,
                                        PNG)</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-white text-right">
                        <button class="btn btn-success btn-lg px-5 shadow-sm" type="submit">
                            <i class="fas fa-save mr-1"></i> حفظ التحديثات
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote.min.css" rel="stylesheet">
    <style>
        .card-outline.card-primary {
            border-top: 3px solid #007bff;
        }

        .image-preview-wrapper {
            background: #f8f9fa;
            padding: 10px;
            border-radius: 8px;
        }

        .custom-file-label::after {
            content: "تصفح";
        }

        .note-editor {
            border: none !important;
        }

        .form-control-lg {
            border-radius: 8px;
            font-size: 1.1rem;
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
                placeholder: 'ابدأ بكتابة إبداعك هنا...',
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

            // تحسين شكل اسم الملف عند الاختيار
            $('.custom-file-input').on('change', function() {
                let fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').addClass("selected").html(fileName);
            });

            // التحقق قبل الحفظ
            $('form').on('submit', function(e) {
                if ($('#summernote').summernote('isEmpty')) {
                    Swal.fire({
                        icon: 'error',
                        title: 'عذراً',
                        text: 'المحتوى لا يمكن أن يكون فارغاً!',
                        confirmButtonText: 'حسناً'
                    });
                    e.preventDefault();
                }
            });
        });
    </script>
@stop
