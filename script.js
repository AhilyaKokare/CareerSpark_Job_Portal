function toggleChatPopup() {
  var popup = document.getElementById("chatPopup");
  if (popup.style.display === "none") {
      popup.style.display = "block";
  } else {
      popup.style.display = "none";
  }
}



document.addEventListener("DOMContentLoaded", function() {
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    const jobList = document.querySelector('.job-list');
  
    prevBtn.addEventListener('click', function() {
      jobList.scrollBy({ left: -300, behavior: 'smooth' });
    });
  
    nextBtn.addEventListener('click', function() {
      jobList.scrollBy({ left: 300, behavior: 'smooth' });
    });
  });
  
