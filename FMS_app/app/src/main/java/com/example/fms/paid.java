package com.example.fms;

public class paid {

    public paid(int id, String fees_name, String amount, String date) {
        this.id = id;
        this.fees_name = fees_name;
        this.amount = amount;
        this.date = date;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getFees_name() {
        return fees_name;
    }

    public void setFees_name(String fees_name) {
        this.fees_name = fees_name;
    }

    public String getAmount() {
        return amount;
    }

    public void setAmount(String amount) {
        this.amount = amount;
    }

    public String getDate() {
        return date;
    }

    public void setDate(String date) {
        this.date = date;
    }

    public int id ;
    public String fees_name;
    public String amount;
    public String  date;
}
