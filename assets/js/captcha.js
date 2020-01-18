                     let captchaText = document.querySelector('#captcha');
                     let userText = document.querySelector('#textBox');
                     let submitButton = document.getElementById("submit_button");
                     let output = document.querySelector('#output');
                     let refreshButton = document.querySelector('#refresh');
                     
                     let alphaNums = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
                     let emptyArr = [];
                     
                     for(let i = 1; i <= 7; i++) {
                       emptyArr.push(alphaNums[Math.floor(Math.random() * alphaNums.length)]);
                     }
                     captchaText.innerHTML = emptyArr.join('');
                     
                     userText.addEventListener('keyup', function(e) {
                       if(e.keyCode === 13) {
                         if(userText.value === captchaText.innerHTML) {
                           output.classList.add("greenText");
                           output.innerHTML = "Correct!";
                         } else {
                           output.classList.add("redText");
                           output.innerHTML = "Incorrect, please try again";
                         }
                       }
                     });


                     
                     submitButton.addEventListener('click',  function() {
                       if(userText.value === captchaText.innerHTML) {
                         output.classList.add("greenText");
                         output.innerHTML = "Correct!";
                       } else {
                         output.classList.add("redText");
                         output.innerHTML = "Incorrect, please try again";
                       }
                     });
                     
                     refreshButton.addEventListener('click', function () {
                       userText.value = "";
                       let refreshArr = [];
                       for(let j = 1; j <= 7; j++) {
                         refreshArr.push(alphaNums[Math.floor(Math.random() * alphaNums.length)]);
                       }
                       captchaText.innerHTML = refreshArr.join('');
                       output.innerHTML = "";
                     });
                     
                     submitButton.addEventListener('keyup', function(e) {
                       if(e.keyCode === 13) {
                       if(userText.value === captchaText.innerHTML) {
                         console.log("correct!");
                         output.classList.add("greenText");
                         output.innerHTML = "Correct!";
                       } else {
                         output.classList.add("redText");
                         output.innerHTML = "Incorrect, please try again";
                       }
                       }
                     });
                     
                     
                     
                         var submit_button = document.getElementById("submit_button");
                     
                     submit_button.addEventListener("click", function(e) {
                       var required = document.querySelectorAll("input[required],select[required],textarea[required]");
                      
                       
                       required.forEach(function(element) {
                         if(element.value.trim() == "") {
                           element.style.backgroundColor = "#ffdddd";
                         } else {
                           element.style.backgroundColor  = "white";
                         }
                       });
                     });
                     
                     
                     
                     
                     function refreshcaptcha(id){
        var captcha_new_url = $("#captcha_refresh").attr('data-value');
        $("#mycaptcha").removeAttr("src").attr("src",captcha_new_url+Math.random());
    }