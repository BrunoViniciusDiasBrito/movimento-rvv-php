<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movimento reviva Natal</title>
</head>
<body onload="countdown()">
    <h1>Natal chegando:</h1>
    <div class="countdown-container">
        <div class="countdown-el days-c">
            <p class="big-text" id="days">0</p>
            <span>Dias</span>
        </div>

        <div class="countdown-el hour-c">
            <p class="big-text" id="hour">0</p>
            <span>Horas</span>
        </div>

        <div class="countdown-el min-c">
            <p class="big-text" id="min">0</p>
            <span>Minutos</span>
        </div>

        <div class="countdown-el sec-c">
            <p class="big-text" id="sec">0</p>
            <span>Segundos</span>
        </div>

        <div class="container-logo">
            <div class="logo" id="logo"></div>
        </div>
    </div>
    <h2 id="merry-christmas">Quase lá...</h2>

<style>
    *{
        margin: 0;
        padding: 0;
        list-style: none;
        text-decoration: none;
    }

    body {
        background-image: url(image/natal.jpg);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        color: white;
        font-family: sans-serif;
        margin: 0;
    }

    h1{
        font-size: 4rem;
        font-weight: normal;
        margin-top: 5rem;
        background-color:rgb(255, 0, 0, 0.7);
        padding: 5px;
        margin-bottom: 2rem;
        border-radius: 5px;
        border: 5px solid white;
        text-align: center;
    }

    .countdown-container{
        display: flex;
        background-color: rgba(75, 72, 72, 0.6);
        padding: 20px 0;
        border-radius: 10px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .countdown-el{
        text-align: center;
    }

    .countdown-el span{
        font-size: 1.3rem;
    }

    .big-text{
        font-size: 6rem;
        line-height: 1;
        margin: 0 2rem;
        font-weight: bold;
    }

    .container-logo{
        margin-top: 5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        flex-basis: 100%;
    }

    #logo{
        background-image: url(image/rvv-logo.jpg);
        background-position: center;
        background-size: cover;
        border-radius: 50%;
        width: 400px;
        max-height: 400px;
        height: 400px;
    }

    #merry-christmas{
        text-align: center;
        margin: 5rem 0;
        font-size: 4rem;
        width: 53.4%;
        background-color:rgba(75, 72, 72, 0.8);
        border-radius: 10px;
        padding: 20px 0;
    }

    @media(max-width: 560px){
        #merry-christmas{
            width: 80%;
        }
    }
</style>
<script>
{
    const dataTargetDate = "25 December 2020"

    function congrats () {
        const birth         = document.getElementById('merry-christmas')
        const wrapBoxTimer  = document.querySelector('.countdown-container')

        birth.innerText     = 'Feliz Natal, Jesus nasceu! Aleluia Aleluia Aleluia!'

        birth.style.backgroundColor = 'rgb(255, 0, 0, 0.7)'
        birth.style.border          = '5px solid white'

        wrapBoxTimer.style.backgroundColor = 'rgb(255, 0, 0, 0.7)'
        wrapBoxTimer.style.border          = '5px solid white'
    }

    function insertLeftTime (day, hour, min, sec) {
        const daysLeft      = document.getElementById('days')
        const hoursLeft     = document.getElementById('hour')
        const minLeft       = document.getElementById('min')
        const secLeft       = document.getElementById('sec')

        daysLeft.innerText   = formatTime(day)
        hoursLeft.innerText  = formatTime(hour)
        minLeft.innerText    = formatTime(min)
        secLeft.innerText    = formatTime(sec)

        if(day === 0 && hour === 0){
            congrats()
        }
    }

    function countdown () {
        let dateTarget    = new Date(dataTargetDate)
        let currentDate   = new Date()
    
        let totalSec      = (dateTarget - currentDate) / 1000;
        let day           = Math.floor(totalSec / 3600 / 24);
        let hour          = Math.floor(totalSec / 3600) % 24;
        let min           = Math.floor(totalSec / 60) % 60;
        let sec           = Math.floor(totalSec % 60);

        insertLeftTime(day, hour, min, sec)
    }

    function formatTime (time) {
        return time < 10 ? `0${time}` : time
    }

    setInterval(() => {
        countdown()
    }, 1000);
}
</script>

</body>
</html>