<template>
  <div class="container-footer">
    <div class="left">
      <h2>CONTACTS</h2>
      <ul>
        <li>+11 1111 11111 11</li>
        <li class="separator">example@gmail.com</li>
        <li>Mn-Fr: 9:00 - 18:00</li>
        <li>St-Sd: closed</li>
      </ul>
    </div>
    <div class="right">
      <h2>ABOUT US</h2>
      <div class="about">
        <p>
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
        </p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
    name: "FooterComponent"
}
</script>

<style scoped lang="scss">

h2, p, li {
  font-size: 24px;
}

ul {
  list-style: none;
  padding: 0;
}

.left, .right {
  text-align: center;
}

.container-footer {
  border-top: 3px solid black;
  display: flex;
  justify-content: space-around;
  padding: 50px 0;
}

h2, .separator {
  margin-bottom: 40px;
}

.about {
  text-align: left;
  width: 690px;
  line-height: 60px;
}

</style>
