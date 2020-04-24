function changetextbox()
{
    if (document.getElementByName("horti_help").value === "No") {
        document.getElementByName("hortiamt").disable='true';
    } else {
        document.getElementByName("hortiamt").disable='false';
    }
}