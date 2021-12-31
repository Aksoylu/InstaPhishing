
function auth(username,pass,callback){


    var request = new XMLHttpRequest();
    request.open('POST', 'login.service', true);

    request.onload = function() {
        if (this.status == 200) 
        {
            console.log(this.response);
            let data = JSON.parse(this.response);
            callback(data);

        } 
    };

    let fd = new FormData();
    fd.append("username", username);
    fd.append("password", pass);
    request.send(fd);
 
}

function logout(){
       
    var request = new XMLHttpRequest();
    request.open('POST', 'logout.service', true);

    request.onload = function() {
        if (this.status == 200) 
        {
            let data = JSON.parse(this.response);
            if(data.code == 200)
                window.location.href = "/";
            else
                console.log(data.msg);
        } 
    };


    request.send();
}
