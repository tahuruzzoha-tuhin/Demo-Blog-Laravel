@extends('layouts.admin')
@section('content')
<div class="content">
    @can('test_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.tests.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.test.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('cruds.test.title_singular') }} {{ trans('global.list') }}
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Test">
                            <thead>
                                <tr>
                                    <th width="10">

                                    </th>
                                    <th>
                                        {{ trans('cruds.test.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.test.fields.course') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.test.fields.lesson') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.test.fields.title') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.test.fields.description') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.test.fields.is_published') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tests as $key => $test)
                                    <tr data-entry-id="{{ $test->id }}">
                                        <td>

                                        </td>
                                        <td>
                                            {{ $test->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $test->course->title ?? '' }}
                                        </td>
                                        <td>
                                            {{ $test->lesson->title ?? '' }}
                                        </td>
                                        <td>
                                            {{ $test->title ?? '' }}
                                        </td>
                                        <td>
                                            {{ $test->description ?? '' }}
                                        </td>
                                        <td>
                                            <span style="display:none">{{ $test->is_published ?? '' }}</span>
                                            <input type="checkbox" disabled="disabled" {{ $test->is_published ? 'checked' : '' }}>
                                        </td>
                                        <td>
                                            @can('test_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.tests.show', $test->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('test_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.tests.edit', $test->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('test_delete')
                                                <form action="{{ route('admin.tests.destroy', $test->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                                </form>
                                            @endcan

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('test_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.tests.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Test:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection