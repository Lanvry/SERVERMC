sessionStorage.setItem("ping", "Connecting");
if(sessionStorage.getItem("ping") == "Connecting"){
    document.getElementById("pingResults").style.backgroundColor= "grey"
    document.getElementById("status").style.backgroundColor= "grey"
}
function fetchPing() {
    fetch('ping.php')
        .then(response => response.text())
        .then(data => {
            let pingResults = document.getElementById('ping');
            pingResults.textContent = data + " ms"; // Ganti isi div dengan hasil baru
            sessionStorage.setItem("ping", data);
            document.getElementById("status").innerHTML="<ion-icon name='play'></ion-icon>";
            document.getElementById("status").style.backgroundColor= "#3cb02c"
            if(sessionStorage.getItem("ping") < 100){
                document.getElementById("pingResults").style.backgroundColor= "#3cb02c"
            }
            if(sessionStorage.getItem("ping") > 100){
                document.getElementById("pingResults").style.backgroundColor= "#dbdb00"
            }
            if(sessionStorage.getItem("ping") > 250){
                document.getElementById("pingResults").style.backgroundColor= "#db0000"
            }
            if(sessionStorage.getItem("ping") == "Disconnect"){
                document.getElementById("pingResults").style.backgroundColor= "#db0000"
                document.getElementById("status").style.backgroundColor= "#db0000"
                document.getElementById("status").innerHTML="<ion-icon name='stop'></ion-icon>";
                pingResults.textContent = data;
            }

        })
        .catch(error => console.error('Error fetching ping:', error));
}
function port(){
    fetch('port.php')
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.text();
    })
    .then(data => {
        document.getElementById("port").innerText = (data); // Output the text content of the file
        sessionStorage.setItem("port", data);
    })
    .catch(error => {
        console.error('There has been a problem with your fetch operation:', error);
    });
}

// Fetch ping results every 1 second
setInterval(fetchPing, 1000);
setInterval(port, 1000);

// Initial fetch
fetchPing();
port();