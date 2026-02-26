if (document.getElementById("editor_sejarah")) {
  // 1. Konfigurasi Toolbar
  var toolbarOptions = [
    ["bold", "italic", "underline", "strike"],
    [{ header: 1 }, { header: 2 }],
    [{ list: "ordered" }, { list: "bullet" }],
    [{ align: [] }],
    ["clean"],
  ];

  var quillSejarah = new Quill("#editor_sejarah", {
    theme: "snow",
    modules: { toolbar: toolbarOptions },
  });
  var quillKeindahan = new Quill("#editor_keindahan", {
    theme: "snow",
    modules: { toolbar: toolbarOptions },
  });
  var quillKonservasi = new Quill("#editor_konservasi", {
    theme: "snow",
    modules: { toolbar: toolbarOptions },
  });

  document.getElementById("aboutForm").onsubmit = function () {
    document.getElementById("input_sejarah_content").value = quillSejarah.root.innerHTML;
    document.getElementById("input_keindahan_content").value = quillKeindahan.root.innerHTML;
    document.getElementById("input_konservasi_content").value = quillKonservasi.root.innerHTML;
  };
}

function previewAboutImage(input, previewId, placeHolderId, overlayId) {
  const preview = document.getElementById(previewId);
  const placeholder = document.getElementById(placeHolderId);
  const overlay = document.getElementById(overlayId);

  if (input.files && input.files[0]) {
    const reader = new FileReader();
    reader.onload = function (e) {
      preview.src = e.target.result;
      preview.classList.remove("hidden");
      placeholder.classList.add("hidden");
      overlay.classList.remove("hidden");
    };
    reader.readAsDataURL(input.files[0]);
  }
}
