async function SendMail(targetForm) {
    
    let formData = new FormData(targetForm);


    let result = await fetch(`${targetForm.getAttribute("action")}`, {
        method: targetForm.method,
        body: formData,
    }).then(response => {
        if (response.status !== 200) {
            throw new Error(`Mail submission failed: ${response.status}`);
        }

        return response;
    })

    let mailStatus = await result.json();

    return mailStatus;
}

export { SendMail };