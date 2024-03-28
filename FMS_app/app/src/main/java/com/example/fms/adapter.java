package com.example.fms;

import android.annotation.SuppressLint;
import android.content.Context;
import android.content.Intent;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

public class adapter extends RecyclerView.Adapter<adapter.ViewHolder>{
    public fees[] data;
    public Context context;
    public adapter(fees[] data,Context context){
        this.data = data;
        this.context = context;
    }
    @NonNull
    @Override
    public adapter.ViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        LayoutInflater lf = LayoutInflater.from(parent.getContext());
        View view = lf.inflate(R.layout.listview,parent,false);
        ViewHolder viewholder =  new ViewHolder(view);

        return viewholder;
    }

    @Override
    public void onBindViewHolder(@NonNull adapter.ViewHolder holder, @SuppressLint("RecyclerView") int position) {
      holder.amount.setText(data[position].getAmount());
      holder.due_date.setText(data[position].getDue_date());
      holder.name.setText(data[position].getName());
      holder.btn.setOnClickListener(new View.OnClickListener() {
          @Override
          public void onClick(View v) {
              Intent intent = new Intent(context,paid_recyclerview.class);
              intent.putExtra("fees_id",data[position].getId());
              context.startActivity(intent);
          }
      });
    }

    @Override
    public int getItemCount() {
        return data.length;
    }

    public class ViewHolder extends RecyclerView.ViewHolder {
        public TextView amount;
        public TextView due_date;
        public TextView name;
        public Button btn;
        public ViewHolder(@NonNull View itemView) {
            super(itemView);
            this.amount = itemView.findViewById(R.id.amount);
            this.due_date = itemView.findViewById(R.id.due_date);
            this.name = itemView.findViewById(R.id.name);
            this.btn = itemView.findViewById(R.id.btn);
        }
    }
}
