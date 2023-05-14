@extends('admin.master')
@section('module', 'Comment')
@section('action', 'List')
@section('content')
    <div class="white_card card_height_100 mb_30">
        <div class="white_card_header">
        </div>
        <div class="white_card_body">
            <div class="QA_section">
                <div class="white_box_tittle list_header">
                    <h3>Danh sách comment</h3>
                </div>
                <div class="QA_table mb_30">
                    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper no-footer">
                        <table class="table dataTable no-footer dtr-inline" id='my-table' role="grid"
                            aria-describedby="DataTables_Table_1_info" style="width: 971px;">
                            <thead>
                                <tr role="row">
                                    <th scope="col" class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_1"
                                        rowspan="1" colspan="1" style="width: 101px;" aria-sort="ascending"
                                        aria-label="title: activate to sort column descending">ID</th>
                                    <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                        rowspan="1" colspan="1" style="width: 133px;"
                                        aria-label="Category: activate to sort column ascending">Bài viết</th>
                                    <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                        rowspan="1" colspan="1" style="width: 133px;"
                                        aria-label="Category: activate to sort column ascending">Comment</th>
                                        <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                        rowspan="1" colspan="1" style="width: 133px;"
                                        aria-label="Category: activate to sort column ascending">Email Comment</th>
                                        <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                        rowspan="1" colspan="1" style="width: 127px;"
                                        aria-label="Lesson: activate to sort column ascending">Status</th>
                                    <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                        rowspan="1" colspan="1" style="width: 127px;"
                                        aria-label="Lesson: activate to sort column ascending">Created</th>
                                    <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                        rowspan="1" colspan="1" style="width: 67px;"
                                        aria-label="Price: activate to sort column ascending">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="odd">
                                    @foreach ($comments as $item)
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->comment }}</td>
                                        <td>
                                            <select id="my-select">
                                                <option value="1" data-href="{{route('admin.comment.status_comment',['uuid'=>$item->uuid,'status' => 1])}}"  {{ old('status_comment', $item->status_comment) == 1 ? 'selected' : '' }}>Duyệt</option>
                                                <option value="2" data-href="{{route('admin.comment.status_comment',['uuid'=>$item->uuid,'status' => 0])}}"  {{ old('status_comment', $item->status_comment) == 0 ? 'selected' : '' }}>Tắt</option>
                                                <option value="3" data-href="{{route('admin.comment.status_comment',['uuid'=>$item->uuid,'status' => 2])}}"  {{ old('status_comment', $item->status_comment) == 2 ? 'selected' : '' }}>Chặn</option>
                                              </select>
                                        </td>
                                        <td>{{ date('d/m/Y', strtotime($item->created_at)) }}</td>

                                        <td>
                                            <div class="action_btns d-flex">
                                                <a  href="{{ route('admin.comment.edit', ['uuid' => $item->uuid]) }}"
                                                    class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                                <a onclick="return confirm('Xác nhận xóa nhãn hàng ?')"
                                                    href="{{ route('admin.comment.destroy', ['uuid' => $item->uuid]) }}"
                                                    class="action_btn"> <i class="fas fa-trash"></i> </a>
                                            </div>
                                        </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- end content --}}
        @endsection
