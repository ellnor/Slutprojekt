function handleMembership(event) {
    event.preventDefault(); // Förhindrar formuläret från att skicka direkt

    // Hämta formulärdata
  
    // Dölj formuläret och visa tackmeddelandet
    document.getElementById("membership-form").style.display = "none";
    document.getElementById("tack-meddelande").style.display = "block";
}