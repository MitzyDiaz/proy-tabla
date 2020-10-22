function show() {
            let pwdContent = document.getElementById("loginPwd");
            let icon = document.getElementById("show");
            let iconSlash = document.getElementById("hide");

            if(pwdContent.type === "password"){
                pwdContent.type = "text";
                icon.style.display = 'none';
                iconSlash.style.display = 'inline'
            }else{
                pwdContent.type = "password";
                icon.style.display = 'inline';
                iconSlash.style.display = 'none'
            }
}