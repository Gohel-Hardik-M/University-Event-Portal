@extends('layouts.guest')

@section('content')
<main class="create-post-container">
  <div class="create-post-box">
    <h2>Create a Post</h2>
    @if (session('success'))
    <p id="create_post_message" style="color: #ff4081;">{{ session('success') }}</p>
      
    @endif

    <form action="{{ URL::to('/') }}/create_post_action" method="POST" enctype="multipart/form-data">
      @csrf

      <!-- Title -->
      <input type="text" name="title" placeholder="Enter Title"  />

      <!-- Post Type -->
      <select name="post_type" id="post_type" >
        <option value="">-- Select Post Type --</option>
        <option value="Hackathon">Hackathon</option>
        <option value="Event">Event</option>
        <option value="Achievement">Achievement</option>
      </select>

      <!-- Description -->
      <textarea name="caption" placeholder="Write your caption..." rows="4" ></textarea>

      <!-- Upload Multiple Images -->
      <input type="file" name="photos" id="images" multiple accept="image/*" onchange="previewImages()"  />
      <input name="university_id" value="{{ Session::get('user')->id }}" hidden>
      <div id="preview-container" style="display: flex; gap: 10px; margin-top: 10px;"></div>
      




      <button type="submit">Post</button>
      <div class="divider"></div>
        <p>Represent Your Post in Front of multiple universities</p>
    </form>
  </div>
</main>

<style>
  .hidden {
    display: none;
  } 

  #preview-container img {
    height: 70px;
    width: 70px;
    border-radius: 10px;
    object-fit: cover;
  }
</style>

<script>
  function toggleFields() {
    const type = document.getElementById("post_type").value;
    document.getElementById("hackathonFields").classList.add("hidden");
    document.getElementById("eventFields").classList.add("hidden");

    if (type === "hackathon") {
      document.getElementById("hackathonFields").classList.remove("hidden");
    } else if (type === "event") {
      document.getElementById("eventFields").classList.remove("hidden");
    }
  }

  function previewImages() {
    const input = document.getElementById("images");
    const container = document.getElementById("preview-container");
    container.innerHTML = "";

    Array.from(input.files).forEach(file => {
      const reader = new FileReader();
      reader.onload = e => {
        const img = document.createElement("img");
        img.src = e.target.result;
        container.appendChild(img);
      };
      reader.readAsDataURL(file);
    });
  }
</script>
@endsection




