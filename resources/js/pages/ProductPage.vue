<template>
  <div>
    <header-component></header-component>
    <div class="main-info">
      <div class="left">
        <div class="images">
          <div class="img"></div>
          <div class="img"></div>
          <div class="img"></div>
          <div class="img"></div>
        </div>
        <div class="main-img">
        </div>
      </div>
      <div class="right">
        <h2>full product name</h2>
        <div class="blocks">
          <h4>$52</h4>
          <div class="block">
            <h2>size</h2>
            <div class="sizes">
              <span>X</span>
              <span>M</span>
              <span>XL</span>
            </div>
          </div>
          <div class="block in-cart-block">
            <div class="in-cart">
              <p>in cart</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="description">
      <div class="text">
        <h2>Description</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Accusantium aspernatur, atque beatae et ipsam
          reiciendis.</p>
        <div class="benefits">
          <div class="benefit">
            <img src="img/icons/delivery.png" alt="">
            <p>Delivery quality</p>
          </div>
          <div class="benefit">
            <img src="img/icons/payment.png" alt="">
            <p>Prepayment <br>
              or <br>
              Payment upon receipt</p></div>
          <div class="benefit">
            <img src="img/icons/cool_box.png" alt="">
            <p>Return back until 14 days</p>
          </div>

        </div>
      </div>
    </div>
    <div class="relevant">
      <h2>RELEVANT FOR YOU</h2>
      <div class="cards">
        <product-card-component></product-card-component>
        <product-card-component></product-card-component>
        <product-card-component></product-card-component>
        <product-card-component></product-card-component>
      </div>
    </div>
    <footer-component></footer-component>
  </div>
</template>

<script>
import HeaderComponent from "../components/HeaderComponent";
import FooterComponent from "../components/FooterComponent";
import ProductCardComponent from "../components/ProductCardComponent";

export default {
  name: "ProductPage",
  components: {ProductCardComponent, FooterComponent, HeaderComponent}
}
</script>

<style scoped lang="scss">
@import "resources/sass/variables";

h2, h4, span, p {
  font-size: 36px;
}

.main-info, .description {
  border-bottom: 2px solid #C4C4C4;
}

.main-info {
  display: flex;
  justify-content: center;

  .left, .right {
    flex: 1 0 50%;
    min-height: 600px;
  }

  .right {
    .blocks {
      margin-right: 200px;
      margin-left: 20px;
      text-align: center;

      h4 {
        margin-top: 60px;
        color: $base-color;
      }

      .block {
        border-top: 3px solid black;
        margin: 70px 0;

        h2 {
          margin-top: 40px;
        }
      }

      .sizes, .in-cart-block {
        display: flex;
        justify-content: center;
      }
    }

    span {
      display: block;
      color: #FFFFFF;
      background-color: black;
      height: 61px;
      width: 61px;
      margin: 5px;
    }

    .in-cart {
      margin-top: 30px;
      width: 193px;
      height: 66px;
      background-color: black;
      color: white;
    }
  }

  .left {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    padding: 0 100px;

    .images {
      height: 478px;
      width: 280px;
      display: flex;
      justify-content: space-around;
      align-items: center;
      flex-wrap: wrap;

      .img {
        width: 130px;
        height: 230px;
        background-color: grey;
      }
    }

    .main-img {
      width: 280px;
      height: 478px;
      background-color: grey;
    }
  }
}

.description {
  padding: 20px 80px 90px;

  h2 {
    color: $base-color;
  }

  .benefits {
    text-align: center;
    display: flex;
    justify-content: space-around;

    p {
      font-size: 24px;
    }

    .benefit {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 120px;
    }

    img {
      margin-bottom: 20px;
    }
  }
}

.relevant {
  padding: 70px 120px;
  .cards {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }
}

</style>
