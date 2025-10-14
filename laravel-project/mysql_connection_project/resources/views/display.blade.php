<div>
    <h1>List of All Images</h1>

    <a href="/uploaddb">Upload More Image</a>
    <br>
    @foreach($imgData as $img)
       
        <img style="height: 200; width: 300px; margin: 10px;" src="{{ url('storage/uploads/' . $img->path) }}" alt="Blank Image">
    @endforeach

</div>
