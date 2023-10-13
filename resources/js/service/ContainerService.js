import axios from "axios";

const baseUrl = "/api/container";

export default {
    async getContainers() {
        const response = await axios.get(`${baseUrl}`);
        return response.data;
    },
};
