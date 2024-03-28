package com.example.fms;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.annotation.SuppressLint;
import android.os.Bundle;

public class paid_recyclerview extends AppCompatActivity {
    RecyclerView paid_recyclerview;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_paid_recyclerview);

        paid_recyclerview = findViewById(R.id.paidrecycler);
        paid[] data = new paid[]{
                new paid(1,"School Fees","10000","1-12-12"),
                new paid(2,"Tution Fees","8000","1-12-12"),
                new paid(2,"Acadmey Fees","9000","1-12-12")
        };
        paid_adapter paid_adapter = new paid_adapter(data);
        paid_recyclerview.setHasFixedSize(true);
        paid_recyclerview.setLayoutManager(new LinearLayoutManager(this));
        paid_recyclerview.setAdapter(paid_adapter);
    }
}