document.getElementsByClassName("explorebutton").onclick = function() {
    window.location.href='aboutdoctor.html';
    }
    let currentReview = 1;
const reviews = document.querySelectorAll('.review');

function showReview(direction) {
   reviews[currentReview - 1].style.display = 'none';
   currentReview += direction;

   if (currentReview < 1) {
       currentReview = reviews.length;
   } else if (currentReview > reviews.length) {
       currentReview = 1;
   }

   reviews[currentReview - 1].style.display = 'flex';
}

// Initially, show the first review
showReview(0);