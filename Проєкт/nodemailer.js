var random = getRandomInt(1000);
var nodemailer = require('nodemailer'); 
var mail = nodemailer.createTransport({ 
    service: 'gmail', 
    auth: { 
        user: 'igork8803@gmail.com', 
        pass: 'Andrey2007-' 
    } 
}); 
var mailOptions = { 
    from: 'igork8803@gmail.com',
    to: 'igork8803@gmail.com', subject: 'Замовлення', text: `Добрий день, Андрій Кочетков!\nВи замовили товар на адресу вул.Ситова 17\nВаш номер замовлення: $(random)\nЦіна: 12550` };
transporter.sendMail(mailOptions, function(error, info){ if (error) { console.log(error); } else { console.log('Email sent: ' + info.response); } }); 