
<script setup lang="ts">

import AdminLayout from "@/Layouts/AdminLayout.vue";
import { router } from '@inertiajs/vue3';
import { Head } from "@inertiajs/vue3";
import {Dialog, QTable, QTableProps} from "quasar";
import {PropType, ref} from "vue";

const columns: QTableProps['columns'] = [
    {
        field: 'email',
        label: 'Email',
        name: 'email',
        align: 'left',
        sortable: true,
    },
    {
        field: 'created_at',
        label: 'Created At',
        name: 'created_at',
        align: 'right',
        sortable: true,
    },
    {
        field: 'actions',
        label: '',
        name: 'actions',
        align: 'right',
        sortable: false,
    },
]

const props = defineProps({
    items: Array,
    pagination: Object as PropType<{
        page: number;
        sort: string;
        descending: boolean;
        total: number;
        rpp: number;
    }>
})

function deletePage(id: number) {
    Dialog.create({
        title: 'Confirm',
        message: 'Do you want to delete this record',
        cancel: true
    }).onOk(() => {
        router.delete(route('admin.newsletter-registrations.destroy',id))
    })
}

const pagination = ref<QTableProps['pagination']> ({
    page: props.pagination.page,
    rowsPerPage: props.pagination.rpp,
    rowsNumber: props.pagination.total,
    descending: props.pagination.descending,
    sortBy: props.pagination.sort
})


function onRequest(reqProp: {pagination: QTableProps['pagination'], filter: string}) {
    router.get(route('admin.newsletter-registrations.index',{
        page: reqProp.pagination.page,
        sort: reqProp.pagination.sortBy,
        descending: reqProp.pagination.descending,
        rpp: reqProp.pagination.rowsPerPage,
        search: reqProp.filter
    }))
}
</script>

<template>
    <Head title="Enquiries"></Head>
    <AdminLayout>
        <q-breadcrumbs>
            <q-breadcrumbs-el label="Dashboard" class="cursor-pointer" @click="router.visit(route('admin.dashboard'))"></q-breadcrumbs-el>
            <q-breadcrumbs-el label="Newsletter Registrations"></q-breadcrumbs-el>
        </q-breadcrumbs>
        <q-table
            class="q-mt-md"
            :rows="items"
            :columns="columns"
            row-key="id"
            @request="onRequest"
            v-model:pagination="pagination"
        >
            <template v-slot:body-cell-actions="props">
                <q-td class="text-right">
                    <q-btn flat size="sm" round icon="delete" color="red" @click="deletePage(props.row.id)"></q-btn>
                </q-td>
            </template>
        </q-table>
    </AdminLayout>
</template>
<style scoped>

</style>
