<link rel="stylesheet" href="./projectcss/tshert.css">
<title>Mini Project</title>

<body class="block-center-center">
    <section class="Product inline-center-center gap-lg">
        <a href="#" class="Visual block-center-center">
            <picture>
                <source srcset="
              https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/product-details/images/img-1.avif
            " type="image/avif" />
                <img src="https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/product-details/images/img-1.webp"
                    alt="cheetah hoodie" />
            </picture>
            <picture>
                <source srcset="
              https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/product-details/images/img-2.avif
            " type="image/avif" />
                <img src="https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/product-details/images/img-2.webp"
                    alt="cheetah hoodie" />
            </picture>
        </a>
        <form action="" class="Form block-start-start gap-lg">
            <h3>CHEETAH GLAM HOODIE</h3>

            <div class="Price">$80.00 -$80% off</div>

            <fieldset class="TagList inline-wrap gap-sm">
                <legend><b>Sizes</b>: (choose one)</legend>
                <div class="TagToggle block">
                    <input type="radio" name="taglist-radio" value="size-s" id="taglist-radio-size-s" required />
                    <label for="taglist-radio-size-s">S</label>
                </div>
                <div class="TagToggle block">
                    <input type="radio" name="taglist-radio" value="size-m" id="taglist-radio-size-m" required />
                    <label for="taglist-radio-size-m">M</label>
                </div>
                <div class="TagToggle block">
                    <input type="radio" name="taglist-radio" value="size-l" id="taglist-radio-size-l" required />
                    <label for="taglist-radio-size-l">L</label>
                </div>
                <div class="TagToggle block">
                    <input type="radio" name="taglist-radio" value="size-xl" id="taglist-radio-size-xl" required />
                    <label for="taglist-radio-size-xl">XL</label>
                </div>
                <div class="TagToggle block">
                    <input type="radio" name="taglist-radio" value="size-2xl" id="taglist-radio-size-2xl" required />
                    <label for="taglist-radio-size-2xl">2XL</label>
                </div>
                <div class="TagToggle block">
                    <input type="radio" name="taglist-radio" value="size-3xl" id="taglist-radio-size-3xl" required />
                    <label for="taglist-radio-size-3xl">3XL</label>
                </div>
            </fieldset>
            <fieldset id="quantity-list" class="QtField inline-center-center gap-sm">
                <label for="quantitySelect">Quantity:</label>
                <select size="1" id="quantitySelect" name="amount_0_0">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </fieldset>

            <div class="block-start-start gap-sm">
                <button class="Button Primary" type="submit">Pre-Order</button>
                <small>SHIPS ON JANUARY 5, 2024</small>
            </div>

            <p>JUMBO SCREENPRINTED GRAPHIC</p>
        </form>
    </section>