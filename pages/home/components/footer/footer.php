<style>
    <?= include "footer.css"; ?>
</style>

<footer id="footerId">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 d-flex justify-content-center">
               <div class="contact-info">
                   <i class="fa fa-phone-square"></i>
                   <h3>Телефоны</h3>
                   <p>
                       <a href="tel:+61383766284">+38(099) 000-00-00</a>

                       <a href="tel:+61383766284">+38(099) 111-11-11</a>
                   </p>
               </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
                <div class="contact-info">
                    <i class="far fa-envelope-open"></i>
                    <h3>Почта</h3>
                    <p>
                        <a href="mailto:info@example.com">info@example.com</a>
                        <a href="mailto:info@example.com">info@example.com</a>
                    </p>
                </div>
            </div>
            <div class="col-md-4 d-flex  justify-content-center">
                <div class="contact-info">
                    <i class="fa fa-phone-square"></i>
                    <h3>Адрес</h3>
                    <p>
                        123 West Street, Melbourne
                        Victoria 3000 Australia
                    </p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="t text-center pb-5 mb-md-5">
                    <h2>Остались вопросы?</h2>
                </div>
            </div>
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <form class="telegram w-100 footer-form" data-aos="fade-left" data-aos-duration="800">
                    <input type="hidden" name="location" value="Футер">
                   <div class="row pb-5">
                       <div class="col-md-6">
                           <input type="text" name="name" placeholder="Ваше Имя">
                       </div>
                       <div class="col-md-6">
                           <input class="input-mask-s" type="tel" name="phone" placeholder="Ваш Телефон*" required>
                       </div>
                       <div class="col-md-12">
                           <input type="email" name="email" placeholder="Ваша Почта">
                       </div>
                       <div class="col-md-12">
                           <textarea name="message" id="" cols="30" rows="10" placeholder="Ваше Сообщение"></textarea>
                       </div>
                   </div>

                    <button>Отправить сообщение</button>
                </form>
            </div>
        </div>
    </div>
</footer>
<div class="footer-contacts-social">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-md-12 mt-5">
                <div class="copyright">
                    <p>© copyright 2019 | All right reserved.</p>
                </div>
            </div>
        </div>
    </div>
</div>