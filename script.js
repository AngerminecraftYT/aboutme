function requestListener() {
  var data = JSON.parse(this.responseText);
  console.log(data);
  document.getElementById('server-1-motd').innerHTML = data.motd.html
  document.getElementById('server-1-online').innerHTML = data.players.online
  document.getElementById('server-1-max').innerHTML = data.players.max
}
function requestListener2() {
  var data = JSON.parse(this.responseText);
  console.log(data);
  document.getElementById('server-2-motd').innerHTML = data.motd.html
  document.getElementById('server-2-online').innerHTML = data.players.online
  document.getElementById('server-2-max').innerHTML = data.players.max
}
function requestListener3() {
  var data = JSON.parse(this.responseText);
  console.log(data);
  document.getElementById('server-3-motd').innerHTML = data.motd.html
  document.getElementById('server-3-online').innerHTML = data.players.online
  document.getElementById('server-3-max').innerHTML = data.players.max
}
function requestListener4() {
  var data = JSON.parse(this.responseText);
  console.log(data);
  document.getElementById('server-4-online').innerHTML = data.players.online
  document.getElementById('server-4-max').innerHTML = data.players.max
}
function requestError(error) {
  console.log('Issue whilst pinging: ', error);
}

var request = new XMLHttpRequest();
request.onload = requestListener;
request.onerror = requestError;
request.open('get', 'https://api.mcsrvstat.us/2/unreachpvp.servers.unreach.host', true);
request.send();

var request = new XMLHttpRequest();
request.onload = requestListener2;
request.onerror = requestError;
request.open('get', 'https://api.mcsrvstat.us/2/farms.servers.unreach.host', true);
request.send();

var request = new XMLHttpRequest();
request.onload = requestListener3;
request.onerror = requestError;
request.open('get', 'https://api.mcsrvstat.us/2/18o4.servers.unreach.host', true);
request.send();

var request = new XMLHttpRequest();
request.onload = requestListener4;
request.onerror = requestError;
request.open('get', 'https://api.mcsrvstat.us/2/mc.unreach.host:25562', true);
request.send();