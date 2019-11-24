<h1>Images</h1>
@component('btn_del')
@endcomponent
<table>
    <tr>
        <td>ID:{{ $img->id }}</td>
        <td></td>
    </tr>
    <tr>
        <td>FileName:{{ $img->filename }}</td>
        <td></td>
    </tr>
    <tr>
        <td>Alt:</td>
        <td></td>
    </tr>
    <tr>
        <td><img src="{{ $img->url }}" alt="" ></td>
    </tr>
</table>
