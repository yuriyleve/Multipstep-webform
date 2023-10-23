import { ref, onMounted } from "vue";
import { defineStore } from "pinia";

export const useContainerStore = defineStore(
    "container",
    () => {
        const initialState = {
            page: 1,
            name: "",
            config: "",
            id: "",
            gtm_id: "",
            location: "",
            plan: "",
            billing_period: 1,
            plan_autoupgrade: 0,
            domain: "",
            subdomain: "",
        };
        const container = ref({ ...initialState });
        const server_locations = ref([]);
        const plans = ref([]);

        const update = (value) => {
            container.value = { ...container.value, ...value };
        };

        const reset = () => {
            container.value = {
                ...initialState,
                location: server_locations.value[0]?.id,
            };
        };

        const fetchContainerData = async () => {
            const response = await fetch("/api/container");
            const data = await response.json();

            server_locations.value = data.server_locations;
            plans.value = data.plans;
        };

        onMounted(fetchContainerData);

        return {
            server_locations,
            plans,
            container,
            update,
            reset,
        };
    },
    {
        persist: true,
    }
);
