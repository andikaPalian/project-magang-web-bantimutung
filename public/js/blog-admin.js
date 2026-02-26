function previewBlogImage(input) {
  const preview = document.getElementById("blog_preview");
  const placeholder = document.getElementById("blog_placeholder");
  const overlay = document.getElementById("blog_overlay");

  if (input.files && input.files[0]) {
    const reader = new FileReader();
    reader.onload = function (e) {
      preview.src = e.target.result;
      preview.classList.remove("hidden");
      placeholder.classList.add("hidden");
      placeholder.classList.remove("flex");
      overlay.classList.remove("hidden");
    };
    reader.readAsDataURL(input.files[0]);
  }
}

if (document.getElementById("editor_blog")) {
  var toolbarOptions = [
    ["bold", "italic", "underline", "strike"],
    [{ header: 1 }, { header: 2 }],
    [{ list: "ordered" }, { list: "bullet" }],
    ["link", "image"],
    [{ align: [] }],
    ["clean"],
  ];

  var quillBlog = new Quill("#editor_blog", {
    theme: "snow",
    modules: { toolbar: toolbarOptions },
  });

  document.getElementById("blogForm").onsubmit = function () {
    document.getElementById("input_konten_artikel").value = quillBlog.root.innerHTML;
  };
}
