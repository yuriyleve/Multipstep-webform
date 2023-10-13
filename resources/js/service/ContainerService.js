import axios from "axios";

export default {
    async getContainers() {
        const response = await axios.get(`/api/container`);
        return response.data;
    },
    async getServerLocations() {
        const response = await axios.post(`/api/container/getServerLocations`);
        return response.data;
    },
    async getPlans() {
        const response = await axios.get(`/api/plan`);
        return response.data;
    },
};
