
/* global moment */

/**
 * 
 * @author Ervinne Sodusta 
 */
var SGFormatter = {
    SERVER_DATETIME_FORMAT: "YYYY-MM-DD HH:mm:ss.fff",
    SERVER_DATE_FORMAT: "YYYY-MM-DD",
    SERVER_TIME_FORMAT: "HH:mm:ss.fff",
    DISPLAY_DATE_TIME_FORMAT: "MM/DD/YYYY",
    DISPLAY_DATE_FORMAT: "MM/DD/YYYY",
    DISPLAY_TIME_FORMAT: "hh:mm A"
};

SGFormatter.displayDateTime = function (dateTime) {
    return moment(dateTime, SGFormatter.SERVER_DATETIME_FORMAT)
            .format(SGFormatter.DISPLAY_DATE_TIME_FORMAT);
};

SGFormatter.displayDate = function (dateTime, originalDateFormat) {
    if (dateTime) {
        return moment(dateTime, originalDateFormat ? originalDateFormat : SGFormatter.SERVER_DATE_FORMAT)
                .format(SGFormatter.DISPLAY_DATE_FORMAT);
    } else {
        return "";
    }
};

SGFormatter.displayTime = function (dateTime) {
    if (dateTime) {
        return moment(dateTime, SGFormatter.SERVER_TIME_FORMAT)
                .format(SGFormatter.DISPLAY_TIME_FORMAT);
    } else {
        return "";
    }
};

SGFormatter.convertToServerDate = function (dateTime) {
    if (dateTime) {
        return moment(dateTime, SGFormatter.DISPLAY_DATE_FORMAT)
                .format(SGFormatter.SERVER_DATE_FORMAT);
    } else {
        return "";
    }
};

SGFormatter.convertToServerTime = function (dateTime) {
    if (dateTime) {
        return moment(dateTime, SGFormatter.DISPLAY_TIME_FORMAT)
                .format(SGFormatter.SERVER_TIME_FORMAT);
    } else {
        return "";
    }
};

SGFormatter.formatValue = function (value, displayFormat) {

    var formattedValue;

    switch (displayFormat) {
        case 'integer' :
            formattedValue = Math.round(value);
            break;
        case 'numeric' :
            formattedValue = parseFloat(value);
            formattedValue = formattedValue.toFixed(2);
            break;
        case 'currency' :
            formattedValue = SGFormatter.formatCurrency(value);
            break;
        default:
            formattedValue = value;
    }

    return formattedValue;

};

SGFormatter.formatCurrency = function (number, decimals, decimalSeparator, thousandsSeparator) {
    number = parseFloat(number);

    decimals = isNaN(decimals) ? 2 : Math.abs(decimals); //if decimal is zero we must take it, it means user does not want to show any decimal
    decimalSeparator = decimalSeparator || '.'; //if no decimal separator is passed we use the dot as default decimal separator (we MUST use a decimal separator)

    /*
     according to [http://stackoverflow.com/questions/411352/how-best-to-determine-if-an-argument-is-not-sent-to-the-javascript-function]
     the fastest way to check for not defined parameter is to use typeof value === 'undefined' 
     rather than doing value === undefined.
     */
    thousandsSeparator = (typeof thousandsSeparator === 'undefined') ? ',' : thousandsSeparator; //if you don't want to use a thousands separator you can pass empty string as thousands_sep value

    var sign = (number < 0) ? '-' : '';
    //extracting the absolute value of the integer part of the number and converting to string
    var absValue = parseInt(number = Math.abs(number).toFixed(decimals)) + '';
    var thousandCount = ((thousandCount = absValue.length) > 3) ? thousandCount % 3 : 0;

    return sign + (thousandCount ? absValue.substr(0, thousandCount) + thousandsSeparator : '') + absValue.substr(thousandCount).replace(/(\d{3})(?=\d)/g, "$1" + thousandsSeparator) + (decimals ? decimalSeparator + Math.abs(number - absValue).toFixed(decimals).slice(2) : '');
};

SGFormatter.formatCurrencyToNumber = function (currency) {
    return Number(currency.replace(/[^0-9\.]+/g, ""));
};