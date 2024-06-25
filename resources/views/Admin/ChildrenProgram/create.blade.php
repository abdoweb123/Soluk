@extends(ucfirst(activeGuard()).'.Layouts.layout')
@section('pagetitle',__('trans.children_programs'))

@section('content')
<form action="{{ route(activeGuard().'.children_programs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('post')

    <div class="text-center">
        <img src="{{ asset(setting('logo')) }}" class="rounded mx-auto text-center"  id="image"  height="200px">
    </div>

    <div class="row">
        <div class="col-md-6 col-sm-12">
            <label for="phone">{{ __('trans.child') }}</label>
            <select name="child_id" class="form-control select2" required>
                <option value="" selected>----</option>
                @foreach($children as $child)
                    <option value="{{$child->id}}" {{$child->id == old('child_id') ? 'selected' : ''}}>{{$child->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="phone">{{ __('trans.program') }}</label>
            <select name="program_id" class="form-control select2" required>
                <option value="" selected>----</option>
                @foreach($programs as $program)
                    <option value="{{$program->id}}" {{$program->id == old('program_id') ? 'selected' : ''}}>{{$program->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="phone">{{ __('trans.topic') }}</label>
            <select name="topic_id[]" class="form-control select2" multiple required>
                @foreach($topics as $topic)
                    <option value="{{$topic->id}}" {{$topic->id == old('topic_id') ? 'selected' : ''}}>{{$topic->title}}</option>
                @endforeach
            </select>
        </div>


{{--        <h2 style="margin-top:10px;">@lang('trans.topics')</h2>--}}
{{--        <div class="topics-container row">--}}
{{--            <div class="topic col-md-6 col-sm-12">--}}
{{--                <div class="col-md-12 col-sm-12 row">--}}
{{--                    <div class="col-md-10 col-sm-10">--}}
{{--                        <label for="image">{{ __('trans.image') }}</label>--}}
{{--                        <input class="form-control w-100" type="file" name="image[]" onchange="previewImage(this)" required>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-2 col-sm-2">--}}
{{--                        <img src="" alt="" class="image-preview" style="width:100%; display:none;">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-12 col-sm-12">--}}
{{--                    <label for="title_ar">{{ __('trans.title_ar') }}</label>--}}
{{--                    <input class="form-control w-100" type="text" name="title_ar[]" required>--}}
{{--                </div>--}}
{{--                <div class="col-md-12 col-sm-12">--}}
{{--                    <label for="title_en">{{ __('trans.title_en') }}</label>--}}
{{--                    <input class="form-control w-100" type="text" name="title_en[]" required>--}}
{{--                </div>--}}
{{--                <div class="col-md-12 col-sm-12">--}}
{{--                    <label for="title_ar">{{ __('trans.desc_ar') }}</label>--}}
{{--                    <textarea name="desc_ar[]" class="form-control" cols="10" rows="5" required></textarea>--}}
{{--                </div>--}}
{{--                <div class="col-md-12 col-sm-12">--}}
{{--                    <label for="title_en">{{ __('trans.desc_en') }}</label>--}}
{{--                    <textarea name="desc_en[]" class="form-control" cols="10" rows="5" required></textarea>--}}
{{--                </div>--}}
{{--                <div class="col-md-2 col-sm-12 mt-4">--}}
{{--                    <button type="button" class="btn btn-danger remove-topic">-</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="col-12 my-4">--}}
{{--            <button type="button" id="add-topic" class="btn btn-secondary">@lang('trans.add_another_topic')</button>--}}
{{--        </div>--}}

        <div class="clearfix"></div>
        <div class="col-12 my-4">
            <div class="button-group my-4">
                <button type="submit" class="main-btn btn-hover w-100 text-center">
                    {{ __('trans.Submit') }}
                </button>
            </div>
        </div>
    </div>
</form>

@endsection


@section('script')
{{--    <script>--}}
{{--        // show image--}}
{{--        function previewImage(input) {--}}
{{--            if (input.files && input.files[0]) {--}}
{{--                var reader = new FileReader();--}}
{{--                reader.onload = function(e) {--}}
{{--                    $(input).closest('.topic').find('.image-preview').attr('src', e.target.result).show();--}}
{{--                }--}}
{{--                reader.readAsDataURL(input.files[0]);--}}
{{--            }--}}
{{--        }--}}

{{--        $(document).ready(function() {--}}

{{--            // add topic--}}
{{--            $('#add-topic').click(function() {--}}
{{--                // Clone the topic div--}}
{{--                var newTopic = $('.topic:first').clone();--}}
{{--                // Clear the values of the input fields--}}
{{--                newTopic.find('input').val('');--}}
{{--                newTopic.find('textarea').val('');--}}
{{--                newTopic.find('input[type="file"]').val('');--}}
{{--                newTopic.find('img').attr('src', '');--}}

{{--                // Append the new cloned and cleared topic to the topics container--}}
{{--                $('.topics-container').append(newTopic);--}}
{{--            });--}}


{{--            // remove topic--}}
{{--            $(document).on('click', '.remove-topic', function() {--}}
{{--                // Check if there is only one topic left--}}
{{--                if ($('.topic').length > 1) {--}}
{{--                    // Remove the topic div--}}
{{--                    $(this).closest('.topic').remove();--}}
{{--                } else {--}}
{{--                    // Alert or notify the user that at least one topic must remain--}}
{{--                    Swal.fire({--}}
{{--                        icon: 'warning',--}}
{{--                        title: '@lang('trans.cant_delete_topic')',--}}
{{--                        text: '@lang('trans.At least one topic must remain.')',--}}
{{--                        confirmButtonText: 'OK'--}}
{{--                    });--}}
{{--                    // Optionally, you can prevent further action or provide a message--}}
{{--                }--}}
{{--            });--}}

{{--        });--}}
{{--    </script>--}}
@stop
