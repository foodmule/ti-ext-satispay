<div
    id="Satispay"
    class="payment-form hide w-100"
    data-publishable-key="<?= $paymentMethod->getPublishableKey() ?>"
    data-card-selector="#stripe-card-element"
    data-error-selector="#stripe-card-errors"
    data-trigger="[type=radio][name=payment]"
    data-trigger-action="show"
    data-trigger-condition="value[satispay]"
    data-trigger-closest-parent="form"
>
    <?php foreach ($paymentMethod->getHiddenFields() as $name => $value) { ?>
        <input type="hidden" name="<?= $name; ?>" value="<?= $value; ?>"/>
    <?php } ?>
    



    <div class="form-group mt-2">
<img src="https://staging.online.satispay.com/images/it-pay-red.svg" alt="Pay with Satispay" id="pay-with-satispay" style="height: 50px; cursor: pointer;" />
    </div>
</div>




