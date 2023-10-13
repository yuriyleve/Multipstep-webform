import { ref } from "vue";
import { defineStore } from "pinia";

export const useContainerStore = defineStore("container", () => {
    const container = ref({
        name: "",
        config: "",
        id: "",
        gtm_id: "",
        location: "",
        plan: "",
        billing_period: "",
        plan_autoupgrade: "",
        domain: "",
        subdomain: "",
    });

    function update(value) {
        container.value = { ...container.value, ...value };
    }

    return {
        container,
        update,
    };
});
