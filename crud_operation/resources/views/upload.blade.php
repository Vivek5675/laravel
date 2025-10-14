<div>
    <h1 style="background-color: blanchedalmond;">Upload Image</h1>
    <br><br>

    <form action="upload" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file"><br><br>
        <button>Upload</button>
    </form>
</div>
