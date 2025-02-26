document.getElementById("whatsappForm").addEventListener("submit", function(event) {
    event.preventDefault(); 


    var parentName = document.getElementById("parentName").value;
    var studentName = document.getElementById("studentName").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var course = document.getElementById("course").value;
    var mode = document.getElementById("mode").value;
    var note = document.getElementById("note").value;


    var message = "*Yeni Qeydiyyat Məlumatı* %0A%0A" +
        " *Valideyn Adı Soyadı:* " + parentName + "%0A" +
        " *Təhsil Alanın Adı Soyadı:* " + studentName + "%0A" +
        " *E-poçt:* " + email + "%0A" +
        " *Əlaqə Nömrəsi:* " + phone + "%0A" +
        " *Seçilmiş Kurs:* " + course + "%0A" +
        " *Tədris Növü:* " + mode + "%0A" +
        " *Qeyd:* " + note;


    var phoneNumber = "994604042000";


    var whatsappURL = "https://wa.me/" + phoneNumber + "?text=" + message;


    window.open(whatsappURL, "_blank");
});