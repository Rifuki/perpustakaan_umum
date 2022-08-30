const main = document.querySelector("main");

// Event Tombol Sidebar
// End Event Tombol Sidebar

// Tombol Non Aktif
Array.from(document.querySelectorAll("sideButton"))
  .filter((t) => {
    return t.id !== "beranda" && t.id !== "dataAnggota" && t.id !== "logout";
  })
  .forEach((t) => {
    t.addEventListener("click", () => {
      main.innerHTML = nullContent();
      alert("Fitur Belum Berfungsi");
    });
  });
// End Tombol Non Aktif
