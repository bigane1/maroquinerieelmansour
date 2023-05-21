       
<!DOCTYPE html>
<html lang="en">
<head>
    <script  type="text/javascript">
   function     sendWhatsAppMessage() {
    const phoneNumber = '+212 6 09 29 96 60';
    const message = "Besoin d'informations sur un produit";
    const apiUrl = `https://api.whatsapp.com/send?phone=${phoneNumber}&text=${encodeURIComponent(message)}`;
    window.open(apiUrl, '_blank');
  }
</script>
</head>
<body>
       <div class="member-contact-info">
                            <div class="single-contact">
                                <p> Les frais de ports ne sont pas inclus dans les prix.
                                    Pour toute commande contactez nous:</p>
                                <h6><a onclick="sendWhatsAppMessage()" ><i class="fab fa-whatsapp"></i></a> <t>Téléphone</h6>
                                <p>+212 6 09 29 96 60</p>
                            </div>
                            <div class="single-contact">
                                <h6>Email</h6>
                                <p>contact@maroquinerieelmansour.com</p>
                            </div>
                            <div class="single-contact">
                                <h6>Adresse</h6>
                                <p>44 place des Nations Unies 20000 Casablanca - Maroc</p>
                            </div>
                        </div>
</body>

</html>