export const convertMoneyCop = (value) => {
    if (typeof value !== "number") {
        throw new TypeError("Input must be a number");
    }

    return value.toLocaleString("es-CO", {
        style: "currency",
        currency: "COP",
        minimumFractionDigits: 0,
        maximumFractionDigits: 0,
    });
};
