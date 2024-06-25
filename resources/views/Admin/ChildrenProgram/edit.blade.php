@extends(ucfirst(activeGuard()).'.Layouts.layout')
@section('pagetitle',__('trans.children_programs'))

@section('content')
    <form action="{{ route(activeGuard().'.children_programs.update',['child_id'=>$Model->child_id,'program_id'=>$Model->program_id,]) }}" method="POST" enctype="multipart/form-data">
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
                        <option value="{{$child->id}}" {{$child->id == $Model->child_id ? 'selected' : ''}}>{{$child->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 col-sm-12">
                <label for="phone">{{ __('trans.program') }}</label>
                <select name="program_id" class="form-control select2" required>
                    <option value="" selected>----</option>
                    @foreach($programs as $program)
                        <option value="{{$program->id}}" {{$program->id == $Model->program_id ? 'selected' : ''}}>{{$program->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 col-sm-12">
                <label for="phone">{{ __('trans.topic') }}</label>
                <select name="topic_id[]" class="form-control select2" multiple required>
                    @foreach($topics as $topic)
                        <option value="{{ $topic->id }}" {{ in_array($topic->id, $selectedTopicIds) ? 'selected' : '' }}>
                            {{ $topic->title }}
                        </option>
                    @endforeach
                </select>
            </div>

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

