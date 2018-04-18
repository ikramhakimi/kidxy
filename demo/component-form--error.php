<div class="o-grid">
    <div class="o-grid__item  u-width-1/3  u-width-1@mobile">
        <h4 class="u-text-6  u-color-muted  u-margin-none">Field Error</h4>
    </div>
    <div class="o-grid__item  u-width-2/3  u-width-1@mobile">
        <div class="c-field  c-field--error">
            <label>Example input</label>
            <input type="text" class="c-input" placeholder="example@placeholder.com">
            <div class="c-field__message">Please provide email address.</div>
        </div>

        <div class="c-field  c-field--error">
            <label>Example select</label>
            <select class="c-input">
                <option>Pick a number</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            <div class="c-field__message">Please pick a number.</div>
        </div>

        <div class="c-field  c-field--error">
            <label>Example textarea</label>
            <textarea class="c-input" placeholder="" rows="4"></textarea>
            <div class="c-field__message">Please provide a paragraph.</div>
        </div>

        <hr class="u-divider  u-margin-bottom-md">

        <div class="o-grid">
            <div class="o-grid__item  u-width-1/2  u-width-1@mobile">
                <div class="c-field  c-field--error">
                    <label>Checkbox</label>
                    <div class="c-check">
                        <input type="checkbox" id="checkbox-1-1" checked>
                        <label for="checkbox-1-1">Option one checked.</label>
                    </div>

                    <div class="c-check">
                        <input type="checkbox" id="checkbox-1-2">
                        <label for="checkbox-1-2">Option two has longer text to test the typography with this option.</label>
                    </div>

                    <div class="c-check">
                        <input type="checkbox" id="checkbox-1-3" disabled>
                        <label for="checkbox-1-3">Option three is disabled.</label>
                    </div>

                    <div class="c-field__message">Please select an option above.</div>
                </div>
            </div>

            <div class="o-grid__item  u-width-1/2  u-width-1@mobile">
                <div class="c-field  c-field--error">
                    <label>Radio</label>
                    <div class="c-check">
                        <input type="radio" id="radio-1-1" name="radio-specimen" checked>
                        <label for="radio-1-1">Option one checked.</label>
                    </div>

                    <div class="c-check">
                        <input type="radio" id="radio-1-2" name="radio-specimen">
                        <label for="radio-1-2">Option two has longer text to test the typography with this option.</label>
                    </div>

                    <div class="c-check">
                        <input type="radio" id="radio-1-3" name="radio-specimen-2" disabled>
                        <label for="radio-1-3">Option three is disabled.</label>
                    </div>

                    <div class="c-field__message">Please select an option above.</div>
                </div>
            </div>
        </div>
    </div>
</div>
