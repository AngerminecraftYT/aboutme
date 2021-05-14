function randomtext() {
    var randomtxt = ['rofl', 'stop LOOK at this...', 'kabokm.peew best server!', 'kaboom.pw > raccoon.pw', 'sponsored by mathiascode', 'best weebsite.', 'powered by 2b2t', 'bro im so cool', 'fart', 'ok overcast is gamer', 'this is master coding skills', 'hrello', 'this is random text so refresh to see new', 'sponored by NORDVPN', 'lets make kabom.epwew SMP!!!'];
    return randomtxt[Math.floor(Math.random()*randomtxt.length)];
}

document.getElementById("random").innerHTML = randomtext();