@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.lesson.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.lessons.store") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('course') ? 'has-error' : '' }}">
                            <label class="required" for="course_id">{{ trans('cruds.lesson.fields.course') }}</label>
                            <select class="form-control select2" name="course_id" id="course_id" required>
                                @foreach($courses as $id => $course)
                                    <option value="{{ $id }}" {{ old('course_id') == $id ? 'selected' : '' }}>{{ $course }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('course'))
                                <span class="help-block" role="alert">{{ $errors->first('course') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.lesson.fields.course_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                            <label class="required" for="title">{{ trans('cruds.lesson.fields.title') }}</label>
                            <input class="form-control" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                            @if($errors->has('title'))
                                <span class="help-block" role="alert">{{ $errors->first('title') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.lesson.fields.title_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('thumbnail') ? 'has-error' : '' }}">
                            <label for="thumbnail">{{ trans('cruds.lesson.fields.thumbnail') }}</label>
                            <div class="needsclick dropzone" id="thumbnail-dropzone">
                            </div>
                            @if($errors->has('thumbnail'))
                                <span class="help-block" role="alert">{{ $errors->first('thumbnail') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.lesson.fields.thumbnail_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('short_text') ? 'has-error' : '' }}">
                            <label for="short_text">{{ trans('cruds.lesson.fields.short_text') }}</label>
                            <textarea class="form-control" name="short_text" id="short_text">{{ old('short_text') }}</textarea>
                            @if($errors->has('short_text'))
                                <span class="help-block" role="alert">{{ $errors->first('short_text') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.lesson.fields.short_text_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('long_text') ? 'has-error' : '' }}">
                            <label for="long_text">{{ trans('cruds.lesson.fields.long_text') }}</label>
                            <textarea class="form-control" name="long_text" id="long_text">{{ old('long_text') }}</textarea>
                            @if($errors->has('long_text'))
                                <span class="help-block" role="alert">{{ $errors->first('long_text') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.lesson.fields.long_text_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('video') ? 'has-error' : '' }}">
                            <label for="video">{{ trans('cruds.lesson.fields.video') }}</label>
                            <div class="needsclick dropzone" id="video-dropzone">
                            </div>
                            @if($errors->has('video'))
                                <span class="help-block" role="alert">{{ $errors->first('video') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.lesson.fields.video_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('position') ? 'has-error' : '' }}">
                            <label for="position">{{ trans('cruds.lesson.fields.position') }}</label>
                            <input class="form-control" type="number" name="position" id="position" value="{{ old('position', '') }}" step="1">
                            @if($errors->has('position'))
                                <span class="help-block" role="alert">{{ $errors->first('position') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.lesson.fields.position_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('is_published') ? 'has-error' : '' }}">
                            <div>
                                <input type="hidden" name="is_published" value="0">
                                <input type="checkbox" name="is_published" id="is_published" value="1" {{ old('is_published', 0) == 1 ? 'checked' : '' }}>
                                <label for="is_published" style="font-weight: 400">{{ trans('cruds.lesson.fields.is_published') }}</label>
                            </div>
                            @if($errors->has('is_published'))
                                <span class="help-block" role="alert">{{ $errors->first('is_published') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.lesson.fields.is_published_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('is_free') ? 'has-error' : '' }}">
                            <div>
                                <input type="hidden" name="is_free" value="0">
                                <input type="checkbox" name="is_free" id="is_free" value="1" {{ old('is_free', 0) == 1 ? 'checked' : '' }}>
                                <label for="is_free" style="font-weight: 400">{{ trans('cruds.lesson.fields.is_free') }}</label>
                            </div>
                            @if($errors->has('is_free'))
                                <span class="help-block" role="alert">{{ $errors->first('is_free') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.lesson.fields.is_free_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    var uploadedThumbnailMap = {}
Dropzone.options.thumbnailDropzone = {
    url: '{{ route('admin.lessons.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="thumbnail[]" value="' + response.name + '">')
      uploadedThumbnailMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedThumbnailMap[file.name]
      }
      $('form').find('input[name="thumbnail[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($lesson) && $lesson->thumbnail)
      var files = {!! json_encode($lesson->thumbnail) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.preview)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="thumbnail[]" value="' + file.file_name + '">')
        }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
<script>
    Dropzone.options.videoDropzone = {
    url: '{{ route('admin.lessons.storeMedia') }}',
    maxFilesize: 2, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2
    },
    success: function (file, response) {
      $('form').find('input[name="video"]').remove()
      $('form').append('<input type="hidden" name="video" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="video"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($lesson) && $lesson->video)
      var file = {!! json_encode($lesson->video) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="video" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@endsection