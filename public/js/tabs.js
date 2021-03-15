function openTab(tabName, elmnt, cons) {
    // Hide all elements with class="tabcontent" by default */
    var i, tabcontent, tablink, imglink;
    tabcontent = document.getElementsByClassName("tabcontent");
    tablink = document.getElementsByClassName("tab-link");
    imglink = document.getElementsByClassName("img-btn");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }

    switch (cons) {
        case 0:
            tablink[0].style.color = "#0080FF";
            tablink[1].style.color = "white";
            tablink[2].style.color = "white";
            tablink[3].style.color = "white";
            imglink[0].src = "img/blue_home.png";
            imglink[1].src = "img/white_calendar.png";
            imglink[2].src = "img/white_dumbbell.png";
            imglink[3].src = "img/white_friends.png";
            break;
        case 1:
            tablink[0].style.color = "white";
            tablink[1].style.color = "#0080FF";
            tablink[2].style.color = "white";
            tablink[3].style.color = "white";
            imglink[0].src = "img/white_home.png";
            imglink[1].src = "img/blue_calendar.png";
            imglink[2].src = "img/white_dumbbell.png";
            imglink[3].src = "img/white_friends.png";
            break;
        case 2:
            tablink[0].style.color = "white";
            tablink[1].style.color = "white";
            tablink[2].style.color = "#0080FF";
            tablink[3].style.color = "white";
            imglink[0].src = "img/white_home.png";
            imglink[1].src = "img/white_calendar.png";
            imglink[2].src = "img/blue_dumbbell.png";
            imglink[3].src = "img/white_friends.png";
            break;
        case 3:
            tablink[0].style.color = "white";
            tablink[1].style.color = "white";
            tablink[2].style.color = "white";
            tablink[3].style.color = "#0080FF";
            imglink[0].src = "img/white_home.png";
            imglink[1].src = "img/white_calendar.png";
            imglink[2].src = "img/white_dumbbell.png";
            imglink[3].src = "img/blue_friends.png";
            break;
        default:
            break;
    }
  
    // Show the specific tab content
    document.getElementById(tabName).style.display = "block";
  }
  
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();