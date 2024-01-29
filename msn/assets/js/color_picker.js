function showHex(){
      var hex =  document.querySelector("#color_hex_value"),
          h1 = document.querySelector("h1");
          textarea = document.querySelector("textarea");
    
      h1.style.color = document.querySelector("#color_picker").value;
      textarea.style.color = document.querySelector("#color_picker").value;
    }