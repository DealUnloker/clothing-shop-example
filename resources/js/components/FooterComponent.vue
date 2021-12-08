<template>
    <footer>
        <div class="left">
            <p class="title">CONTACTS</p>
            <ul>
                <li><p>+11 1111 11111 11</p></li>
                <li class="separator"><p>example@gmail.com</p></li>
                <li><p>Mn-Fr: 9:00 - 18:00</p></li>
                <li><p>St-Sd: closed</p></li>
            </ul>
        </div>
        <div class="right">
            <p>ABOUT US</p>
            <div class="about">
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
                </p>
            </div>
        </div>
    </footer>
</template>

<script>
export default {
    name: "FooterComponent"
}
</script>

<style scoped lang="scss">

footer {
    border-top: 2px solid black;
    display: flex;
    justify-content: space-around;
    padding: 50px 0;
    text-align: center;
}

p {
    font-size: 24px;
}

.title, .separator {
    margin-bottom: 40px;
}

.about {
    text-align: left;
    width: 690px;
    line-height: 60px;
}


@media screen and (max-width: 970px) {
    footer {
        flex-direction: column;
    }

    .right {
        margin-top: 40px;
    }
    .about {
        text-align: center;
        word-wrap: break-word;
        width: auto;
    }
}

</style>
