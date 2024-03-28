package com.example.fms;

public class fees {
    public fees(int id, String amount, String due_date, String name) {
        this.id = id;
        this.amount = amount;
        this.due_date = due_date;
        this.name = name;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getAmount() {
        return amount;
    }

    public void setAmount(String amount) {
        this.amount = amount;
    }


    public String getDue_date() {
        return due_date;
    }

    public void setDue_date(String due_date) {
        this.due_date = due_date;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    private int id;
    private String amount;
    private String  due_date;
    private String  name;

}
