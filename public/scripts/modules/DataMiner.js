let errorCodes = {
    404: "Not Found! Check your URL",
    500: "There is a problem with the server",
    403: "You do not have the credentials to proceed",
    503: "Service is unavailable. The servers are down"
}

async function fetchData(sourceURL) {
    let resource = await fetch(sourceURL).then(response => {
        if (response.status !== 200) {
            throw new Error(`Danger! Error ${response.status}: ${errorCodes[response.status]}`);
        }
        return response;
    });

    let dataset = await resource.json();

    return dataset[0];
}

async function postData(sourceURL) {
    return "You are using the postData API endpoint";
}


export { fetchData, postData };