document.addEventListener("DOMContentLoaded", () => {
  const videos = document.querySelectorAll(".gallery-video");

  videos.forEach((video) => {
    video.addEventListener("timeupdate", () => {
      if (video.currentTime >= 20) {
        video.currentTime = 0; // Redémarre la vidéo après 20 secondes
        video.play();
      }
    });
  });
});
