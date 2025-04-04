@foreach($records as $key => $record)
                            <tr>
                                <td>{{ ++$key }}</td>
                                @if($record->page_type == 0)
                                 <td>{{ $record->page->title ?? ''}}</td>
                                @elseif($record->page_type == 1)
                                 <td>{{ $record->Category->name ?? ''}}</td>
                                @elseif($record->page_type == 2)
                                 <td>{{ $record->Service->name ?? ''}}</td>
                                 @endif

                                 @if($record->page_type == 0)
                                 <td>{{ $record->page->slug ?? ''}}</td>
                                @elseif($record->page_type == 1)
                                 <td>{{ $record->Category->slug ?? ''}}</td>
                                @elseif($record->page_type == 2)
                                 <td>{{ $record->Service->slug ?? ''}}</td>
                                 @endif

                                <td>{{ $record->meta_title}}</td>
                                
                                
                                @if($record->page_type == 0)
                                 <td>Content Page</td>
                                @elseif($record->page_type == 1)
                                 <td>Subcategory Page(S2)</td>
                                @elseif($record->page_type == 2)
                                 <td>Service Page</td>
                                 @endif
                                
                                <td>
                                    @can('seo-page-edit')
                                    <a href="{{ route('seo-pages.edit', [$record->id]) }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                                    @endcan
                                    <form action="{{ route('seo-pages.destroy', [$record->id]) }}" method="POST" style="display: inline-block;">
                                        @method('DELETE')
                                        @csrf
                                        @can('seo-page-delete')
                                        <button class="btn btn-xs btn-danger" onclick="return confirm('Are you sure you want to delete this?');"><i class="fa fa-trash"></i></button>
                                        @endcan
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                <tr>
                    <td colspan="6" align="center">
                        {!! $records->links('admin.seo.include.custom') !!}
                    </td>
                </tr>