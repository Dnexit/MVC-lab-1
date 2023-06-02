<main class="main">
    <form class="form" id="form_main" method="get" action="mailto:info@w3docs.com">
        <div class="form__field">
            <label for="name">введите ФИО</label>
            <input type="text" id="name" pattern="[А-Яа-яЁё]+\s[А-Яа-яЁё]+\s[А-Яа-яЁё]+" required placeholder="Фамилия Имя Отчество">
            <div class="popover">
                ФИО вводится через пробелы
            </div>
        </div>
        <div class="form__field">
            <fieldset class="fieldset fieldset_gender">
                <legend>ваш пол:</legend>
                <input type="radio" name="gender" value="female" id="female" checked>
                <label for="female">женский</label><br>
                <input type="radio" name="gender" value="male" id="male">
                <label for="male">мужской</label>
            </fieldset>
        </div>
        <div class="form__field">
            <label for="age">ваш возраст:</label>
            <select name="age" id="age" required>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
            </select>
            <div class="popover">
                после 20 лет вход запрещен
            </div>
        </div>
        <div class="form__field">
            <label for="email">почта:</label>
            <input  type="email" name="email" id="email" required placeholder="email@email.com">
            <div class="popover">
                почта должна содержать знак "@" и "."
            </div>
        </div>
        <div class="form__field">
            <label for="phone">телефон:</label>
            <input type="tel" name="phone" id="phone" pattern="\+(7|3)\d{8,10}" required placeholder="+71112223334">
            <div class="popover">
                c +7 или +3, содержит от 9 до 11 цифр
            </div>
        </div>
        <div class="form__field">
            <label for="date">дата:</label>
            <input readonly type="text" placeholder="00.00.0000" id="date" >
            <div class="picker none">
                <div class="picker__head">
                    <select class="picker__head__year">
                        <option value="1900">1900</option>
                        <option value="1901">1901</option>
                        <option value="1902">1902</option>
                        <option value="1903">1903</option>
                        <option value="1904">1904</option>
                        <option value="1905">1905</option>
                        <option value="1906">1906</option>
                        <option value="1907">1907</option>
                        <option value="1908">1908</option>
                        <option value="1909">1909</option>
                        <option value="1910">1910</option>
                        <option value="1911">1911</option>
                        <option value="1912">1912</option>
                        <option value="1913">1913</option>
                        <option value="1914">1914</option>
                        <option value="1915">1915</option>
                        <option value="1916">1916</option>
                        <option value="1917">1917</option>
                        <option value="1918">1918</option>
                        <option value="1919">1919</option>
                        <option value="1920">1920</option>
                        <option value="1921">1921</option>
                        <option value="1922">1922</option>
                        <option value="1923">1923</option>
                        <option value="1924">1924</option>
                        <option value="1925">1925</option>
                        <option value="1926">1926</option>
                        <option value="1927">1927</option>
                        <option value="1928">1928</option>
                        <option value="1929">1929</option>
                        <option value="1930">1930</option>
                        <option value="1931">1931</option>
                        <option value="1932">1932</option>
                        <option value="1933">1933</option>
                        <option value="1934">1934</option>
                        <option value="1935">1935</option>
                        <option value="1936">1936</option>
                        <option value="1937">1937</option>
                        <option value="1938">1938</option>
                        <option value="1939">1939</option>
                        <option value="1940">1940</option>
                        <option value="1941">1941</option>
                        <option value="1942">1942</option>
                        <option value="1943">1943</option>
                        <option value="1944">1944</option>
                        <option value="1945">1945</option>
                        <option value="1946">1946</option>
                        <option value="1947">1947</option>
                        <option value="1948">1948</option>
                        <option value="1949">1949</option>
                        <option value="1950">1950</option>
                        <option value="1951">1951</option>
                        <option value="1952">1952</option>
                        <option value="1953">1953</option>
                        <option value="1954">1954</option>
                        <option value="1955">1955</option>
                        <option value="1956">1956</option>
                        <option value="1957">1957</option>
                        <option value="1958">1958</option>
                        <option value="1959">1959</option>
                        <option value="1960">1960</option>
                        <option value="1961">1961</option>
                        <option value="1962">1962</option>
                        <option value="1963">1963</option>
                        <option value="1964">1964</option>
                        <option value="1965">1965</option>
                        <option value="1966">1966</option>
                        <option value="1967">1967</option>
                        <option value="1968">1968</option>
                        <option value="1969">1969</option>
                        <option value="1970">1970</option>
                        <option value="1971">1971</option>
                        <option value="1972">1972</option>
                        <option value="1973">1973</option>
                        <option value="1974">1974</option>
                        <option value="1975">1975</option>
                        <option value="1976">1976</option>
                        <option value="1977">1977</option>
                        <option value="1978">1978</option>
                        <option value="1979">1979</option>
                        <option value="1980">1980</option>
                        <option value="1981">1981</option>
                        <option value="1982">1982</option>
                        <option value="1983">1983</option>
                        <option value="1984">1984</option>
                        <option value="1985">1985</option>
                        <option value="1986">1986</option>
                        <option value="1987">1987</option>
                        <option value="1988">1988</option>
                        <option value="1989">1989</option>
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                    </select>
                    <select class="picker__head__month">
                        <option value="0">Январь</option>
                        <option value="1">Февраль</option>
                        <option value="2">Март</option>
                        <option value="3">Апрель</option>
                        <option value="4">Май</option>
                        <option value="5">Июнь</option>
                        <option value="6">Июль</option>
                        <option value="7">Август</option>
                        <option value="8">Сентябрь</option>
                        <option value="9">Октябрь</option>
                        <option value="10">Ноябрь</option>
                        <option value="11">Декабрь</option>
                    </select>
                </div>

                <div class="picker__days">
                    <div class="picker__days__item" data-selected="false">1</div>
                    <div class="picker__days__item" data-selected="false">2</div>
                    <div class="picker__days__item" data-selected="false">3</div>
                    <div class="picker__days__item" data-selected="false">4</div>
                    <div class="picker__days__item" data-selected="false">5</div>
                    <div class="picker__days__item" data-selected="false">6</div>
                    <div class="picker__days__item" data-selected="false">7</div>
                    <div class="picker__days__item" data-selected="false">8</div>
                    <div class="picker__days__item" data-selected="false">9</div>
                    <div class="picker__days__item" data-selected="false">10</div>
                    <div class="picker__days__item" data-selected="false">11</div>
                    <div class="picker__days__item" data-selected="false">12</div>
                    <div class="picker__days__item" data-selected="false">13</div>
                    <div class="picker__days__item" data-selected="false">14</div>
                    <div class="picker__days__item" data-selected="false">15</div>
                    <div class="picker__days__item" data-selected="false">16</div>
                    <div class="picker__days__item" data-selected="false">17</div>
                    <div class="picker__days__item" data-selected="false">18</div>
                    <div class="picker__days__item" data-selected="false">19</div>
                    <div class="picker__days__item" data-selected="false">20</div>
                    <div class="picker__days__item" data-selected="false">21</div>
                    <div class="picker__days__item" data-selected="false">22</div>
                    <div class="picker__days__item" data-selected="false">23</div>
                    <div class="picker__days__item" data-selected="false">24</div>
                    <div class="picker__days__item" data-selected="false">25</div>
                    <div class="picker__days__item" data-selected="false">26</div>
                    <div class="picker__days__item" data-selected="false">27</div>
                    <div class="picker__days__item" data-selected="false">28</div>
                    <div class="picker__days__item" data-selected="false">29</div>
                    <div class="picker__days__item" data-selected="false">30</div>
                    <div class="picker__days__item" data-selected="false">31</div>
                </div>
            </div>
        </div>
        <div class="form__field">
            <input type="submit" value="Отправить"></input>
            <input type="reset" value="Очистить"></input>
        </div>
    </form>
</main>
<div class="overlay none">
    <form class="overlay__confirm" action="mailto:info@w3docs.com">
        <div class="overlay__confirm__title">
            Вы уверены что хотите отправить сообщение?
        </div>
        <div class="overlay__confirm__body">
            <input type="submit" value="Да"></input>
            <input type="reset" id="deny" value="Нет"></input>
        </div>
    </form>
</div>
<script src="http://<?= $_SERVER["SERVER_NAME"]; ?>/public/js/contacts.js" defer></script>